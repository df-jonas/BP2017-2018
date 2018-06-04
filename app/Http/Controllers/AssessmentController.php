<?php

namespace App\Http\Controllers;

use App\Assessment;
use App\AssessmentGroupUser;
use App\Skill;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AssessmentController extends Controller
{
    public function index()
    {
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
    }

    public function detail()
    {
        return view('platform.assessment.detail');
    }

    public function new()
    {

        return view('platform.assessment.new');
    }

    public function docentIndex()
    {
        return view('platform.assessment.docent.index');
    }

    public function docentNew()
    {
        $skills = Skill::all();
        $users = User::all();
        $arr = [
            'skills' => $skills,
            'users' => $users,
        ];
        return view('platform.assessment.docent.new', $arr);
    }

    public function docentAssessment()
    {
        return view('platform.assessment.docent.assessment');
    }

    public function docentGroup()
    {
        return view('platform.assessment.docent.group');
    }

    public function docentIndividual()
    {
        return view('platform.assessment.docent.individual');
    }
}
