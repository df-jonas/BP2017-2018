<?php

namespace App\Http\Controllers;

use App\Assessment;
use App\AssessmentGroup;
use App\AssessmentGroupUser;
use App\AssessmentSkill;
use App\Course;
use App\Score;
use App\Skill;
use App\User;
use App\UserCourse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AssessmentController extends Controller
{
    public function index()
    {
        if (Auth::user()->role != "docent") {
            $groups = AssessmentGroupUser::query()->where('user_id', "=", Auth::id())->get();

            $todo = [];
            $finished = [];

            foreach ($groups as $group) {
                $assessment = $group->assessmentgroup->assessment;
                if ($group->givenscores->count() > 0) {
                    $assessment['string'] = "Voltooid";
                    $finished[] = $assessment;
                } else if ($assessment->end->lte(new Carbon())) {
                    $assessment['string'] = "Niet deelgenomen";
                    $finished[] = $assessment;
                } else {
                    $todo[] = $assessment;
                }
            }

            $arr = [
                'todo' => $todo,
                'finished' => $finished
            ];

            return view('platform.assessment.index', $arr);
        } else {
            $courses = Course::query()->has('assessments')->with([
                'assessments' => function ($q) {
                    $q->where("docent_id", "=", Auth::id());
                }
            ])->get();

            $arr = [
                'courses' => $courses
            ];

            return view('platform.assessment.docent.index', $arr);
        }
    }

    public function newassessment()
    {
        if (Auth::user()->role == "docent") {
            $skills = Skill::all();
            $users = User::all();
            $usercourses = UserCourse::query()->where("user_id", "=", Auth::id())->get();

            $arr = [
                'skills' => $skills,
                'users' => $users,
                'usercourses' => $usercourses
            ];
            return view('platform.assessment.docent.new', $arr);
        } else {
            abort(500, "Je kan deze pagina niet bekijken.");
        }
    }

    public function newassessmentpost(Request $request)
    {
        if (Auth::user()->role == "docent") {

            if (sizeof($request->group) < 1)
                abort(500, "Voeg minstens een groep toe.");

            $merge = [];
            foreach ($request->group as $group_ids) {
                $merge = array_merge($merge, $group_ids);
            }
            $res = array_count_values($merge);
            foreach ($res as $set) {
                if ($set > 1) {
                    abort(500, "Een gebruiker kan niet tot meerdere groepen behoren.");
                }
            }

            if (sizeof($request->skills) < 1)
                abort(500, "Duid minstens een skill aan.");

            $assessment = new Assessment();
            $assessment->name = $request->title;
            $assessment->end = $request->end;
            $assessment->retry = 1;
            $assessment->expected_time = $request->time;
            $assessment->docent_id = Auth::id();
            $assessment->course_id = $request->course_id;
            $assessment->save();

            foreach ($request->skills as $skill_id) {
                $assessmentskill = new AssessmentSkill();
                $assessmentskill->assessment_id = $assessment->id;
                $assessmentskill->skill_id = $skill_id;
                $assessmentskill->save();
            }

            $groupnumber = 1;
            foreach ($request->group as $group_ids) {
                $assessmentgroup = new AssessmentGroup();
                $assessmentgroup->name = "Groep " . $groupnumber;
                $assessmentgroup->assessment_id = $assessment->id;
                $assessmentgroup->save();

                $groupnumber++;

                foreach ($group_ids as $user_id) {
                    $assessmentgroupuser = new AssessmentGroupUser();
                    $assessmentgroupuser->assessmentgroup_id = $assessmentgroup->id;
                    $assessmentgroupuser->user_id = $user_id;
                    $assessmentgroupuser->save();
                }
            }
            return Redirect::to(route("assessment-detail", ['assessment_id' => $assessment->id]));
        } else {
            abort(500, "Je kan deze pagina niet bekijken.");
        }
    }

    public function assessmentdetail($assessment_id)
    {
        $assessment = Assessment::query()->where("id", "=", $assessment_id)->first();

        if ($assessment == null)
            abort(404, "Je kan deze pagina niet bekijken.");

        if (Auth::user()->role != "docent") {

            $_tAssessmentgroup = (new AssessmentGroup)->getTable();
            $_tAssessmentgroupuser = (new AssessmentGroupUser())->getTable();

            $groupuser = AssessmentGroupUser::query()
                ->join($_tAssessmentgroup, $_tAssessmentgroupuser . '.assessmentgroup_id', '=', $_tAssessmentgroup . '.id')
                ->where($_tAssessmentgroupuser . '.user_id', '=', Auth::id())
                ->where($_tAssessmentgroup . '.assessment_id', '=', $assessment_id)
                ->first();

            $arr = [
                'groupuser' => $groupuser,
                'id' => $groupuser->assessmentgroup->assessment->id
            ];

            return view('platform.assessment.detail', $arr);
        } else {
            if ($assessment->docent_id != Auth::id())
                abort(404, "Je kan deze pagina niet bekijken.");

            $arr = [
                'assessment' => $assessment
            ];

            return view('platform.assessment.docent.assessment', $arr);
        }
    }

    public function submitscores(Request $request, $assessment_id)
    {
        $_tAssessmentgroup = (new AssessmentGroup)->getTable();
        $_tAssessmentgroupuser = (new AssessmentGroupUser())->getTable();

        $groupuser = AssessmentGroupUser::query()->select($_tAssessmentgroupuser . '.*')
            ->join($_tAssessmentgroup, $_tAssessmentgroupuser . '.assessmentgroup_id', '=', $_tAssessmentgroup . '.id')
            ->where($_tAssessmentgroupuser . '.user_id', '=', Auth::id())
            ->where($_tAssessmentgroup . '.assessment_id', '=', $assessment_id)
            ->first();

        $assessment = $groupuser->assessmentgroup->assessment;
        $user_ids = array_column($groupuser->assessmentgroup->assessmentgroupusers->toArray(), 'id');
        $skill_ids = array_column($assessment->assessmentskills->toArray(), 'id');

        if ($groupuser->assessmentgroup->assessmentgroupusers->count() != sizeof($request->score))
            abort(500, 'Je aantal ingevulde leden komt niet overeen met onze gegevens.');

        foreach ($request->score as $user_id => $skills) {
            if (!in_array($user_id, $user_ids))
                abort(500, "Je kan deze personen niet beoordelen.");
        }

        foreach ($request->score as $user_id => $skills) {

            foreach ($skills as $skill_id => $grade) {
                if (!in_array($skill_id, $skill_ids)) {
                    dd(array($skill_id, $skill_ids, $user_id));
                    abort(500, "Je kan deze skills niet beoordelen.");
                }
            }

            foreach ($skills as $skill_id => $grade) {
                $grade_proc = $grade['grade'];
                $grade_comment = $grade['comment'];

                if ($grade_proc > 3)
                    $grade_proc = 3;

                if ($grade_proc < -1)
                    $grade_proc = -1;

                if (!isset($grade_comment) || empty($grade_comment))
                    $grade_comment = "";

                $score = new Score();
                $score->assessmentgroupuser_from_id = $groupuser->id;
                $score->assessmentgroupuser_to_id = $user_id;
                $score->assessmentskill_id = $skill_id;
                $score->score = $grade_proc;
                $score->comment = $grade_comment;
                $score->save();
            }
        }

        return Redirect::to(route('assessment-index'));
    }

    public function groupdetail($assessment_id, $group_id)
    {
        if (Auth::user()->role == "docent") {

            $group = AssessmentGroup::query()->where('id', '=', $group_id)->first();
            if ($group == null)
                abort(404, "Groep niet gevonden.");

            $assessment = $group->assessment;
            if ($assessment == null | $assessment->id != $assessment_id)
                abort(404, "Assessment niet gevonden.");

            if ($assessment->creator->id != Auth::id())
                abort(404, "Je hebt geen toestemming deze assessment te bekijken.");

            $arr = [
                'group' => $group
            ];

            return view('platform.assessment.docent.group', $arr);
        } else {
            abort(404, "Je kan deze pagina niet bekijken.");
        }
    }

    public function individualdetail($assessment_id, $group_id, $user_id)
    {
        $groupuser = AssessmentGroupUser::query()->find($user_id);

        if (Auth::user()->role == "docent") {
            return view('platform.assessment.docent.individual');
        } else {
            abort(500, "Je kan deze pagina niet bekijken.");
        }
    }
}
