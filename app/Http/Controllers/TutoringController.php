<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Course;
use App\Helpers\NotificationHelper;
use App\Tutee;
use App\Tutor;
use App\TutoringSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TutoringController extends Controller
{
    public function index()
    {
        $tutee_id = Tutee::query()
            ->where('user_id', '=', Auth::id())
            ->get(['id']);

        $tutor_id = Tutor::query()
            ->where('user_id', '=', Auth::id())
            ->get(['id']);

        $sessions = TutoringSession::query()
            ->whereIn('tutor_id', $tutor_id)
            ->orWhereIn('tutee_id', $tutee_id)
            ->get();

        $ids = Tutor::query()
            ->where("active", "=", true)
            ->where("user_id", "=", Auth::id())
            ->get(['course_id']);

        $validcount = Tutee::query()
            ->where("active", "=", true)
            ->whereIn("course_id", $ids)
            ->count();

        $arr = [
            'sessions' => $sessions,
            'validcount' => $validcount
        ];

        return view("platform.tutoring.index", $arr);
    }

    public function newtutor()
    {
        $courses = Course::all();

        $arr = [
            'courses' => $courses
        ];

        return view("platform.tutoring.tutornew", $arr);
    }

    public function newtutorpost(Request $request)
    {
        $request->validate(['course' => 'required|numeric']);
        $course = Course::query()->where('id', '=', $request->course)->first();

        if ($course == null)
            abort(500, "De geselecteerde cursus bestaat niet.");

        $existing = Tutor::query()
            ->where('user_id', '=', Auth::id())
            ->where('course_id', '=', $request->course)
            ->where('active', '=', '1')
            ->first();

        if ($existing == null) {
            $tutor = new Tutor();
            $tutor->user_id = Auth::id();
            $tutor->course_id = $course->id;
            $tutor->active = true;
            $tutor->save();
        }

        return Redirect::to(route('tutoring-index'));
    }

    public function newtutee()
    {
        $courses = Course::all();

        $arr = [
            'courses' => $courses
        ];

        return view("platform.tutoring.tuteenew", $arr);
    }

    public function newtuteepost(Request $request)
    {
        $request->validate([
            'course' => 'required|numeric',
            'description' => 'required'
        ]);
        if (!$request->has('exercises') && !$request->has('explanation') && !$request->has('studying'))
            abort(500, "Er moet minstens een werkpunt aangeduid worden.");

        $course = Course::query()->where('id', '=', $request->course)->first();

        if ($course == null)
            abort(500, "De geselecteerde cursus bestaat niet.");

        $tutee = Tutee::query()
            ->where('user_id', '=', Auth::id())
            ->where('course_id', '=', $request->course)
            ->where('active', '=', '1')
            ->first();

        if ($tutee == null) {
            $tutee = new Tutee();
            $tutee->user_id = Auth::id();
            $tutee->course_id = $course->id;
            $tutee->active = true;
        }

        $tutee->description = $request->description;
        $tutee->need_exercises = isset($request->exercises);
        $tutee->need_explanation = isset($request->explanation);
        $tutee->need_studying = isset($request->studying);
        $tutee->save();

        return Redirect::to(route('tutoring-index'));
    }

    public function accept($tutee_id)
    {
        if (Auth::user()->countIsTutor() >= 3)
            abort(500, "Je mag maximum 3 tutorships tegelijkertijd uitvoeren.");

        $tutee = Tutee::query()
            ->where("id", "=", $tutee_id)
            ->where("active", "=", true)
            ->first();

        if ($tutee == null)
            abort(500, "Dit verzoek bestaat niet of werd reeds geaccepteerd.");

        $tutor = Tutor::query()
            ->where("user_id", "=", Auth::id())
            ->where("course_id", "=", $tutee->course->id)
            ->where("active", "=", true)
            ->first();

        if ($tutor == null)
            abort(500, "Jij geeft geen tutoring voor het geaccepteerde vak.");

        $tutee->active = false;
        $tutee->save();

        $session = new TutoringSession();
        $session->tutee_id = $tutee->id;
        $session->tutor_id = $tutor->id;
        $session->active = true;
        $session->save();

        return Redirect::to(route("tutoring-index"));
    }

    public function requests()
    {
        $ids = Tutor::query()
            ->where("active", "=", true)
            ->where("user_id", "=", Auth::id())
            ->get(['course_id']);

        $candidates = Tutee::query()
            ->where("active", "=", true)
            ->whereIn("course_id", $ids)
            ->orderBy("created_at", "asc")
            ->take(10)
            ->get();

        $arr = [
            'candidates' => $candidates
        ];

        return view("platform.tutoring.requests", $arr);
    }

    public function messages($id)
    {
        $tutoringsession = TutoringSession::query()->find($id);

        if ($tutoringsession == null)
            abort(404, 'Sessie niet gevonden');

        $tutor = Tutor::query()
            ->where('id', '=', $tutoringsession->tutor_id)
            ->first();

        $tutee = Tutee::query()
            ->where('id', '=', $tutoringsession->tutee_id)
            ->first();

        $chats = Chat::query()
            ->where('tutoringsession_id', '=', $id)
            ->orderBy('created_at', 'DESC')
            ->paginate(25);

        if (Auth::id() == $tutor->user->id || Auth::id() == $tutee->user->id) {
            //dd($chats);
            $arr = [
                'tutoringsession' => $tutoringsession,
                'tutor' => $tutor,
                'tutee' => $tutee,
                'chats' => $chats,
            ];

            return view("platform.tutoring.messages", $arr);
        } else {
            abort(404, "Geen toegang om dit te zien.");
        }
    }

    public function addchatasync($tutoringsession_id, Request $request)
    {
        if (!empty($tutoringsession_id)) {

            $tutoringsession = TutoringSession::query()
                ->where("id", "=", $tutoringsession_id)
                ->firstOrFail();

            $chat = new Chat();
            $chat->message = $request->comment;
            $chat->tutoringsession_id = $tutoringsession_id;
            $chat->user_id = Auth::user()->id;
            $chat->save();

            $subject = ($tutoringsession->tutee->user->id == Auth::id()) ? $tutoringsession->tutor : $tutoringsession->tutee;

            $from_id = Auth::id();
            $to_id = $subject->user->id;
            $type = "tutoring";
            $url = route('tutoring-messages', [
                'id' => $tutoringsession_id
            ]);
            $text = "heeft een nieuw chat bericht verstuurd.";

            NotificationHelper::create($from_id, $to_id, $type, $url, $text);
        }

        return response()->json(Chat::query()->where('id', '=', $chat->id)->with(['user' => function ($query) {
            $query->select('id', 'first_name', 'last_name', 'image');
        }])->firstOrFail());
    }

    public function planning()
    {
        return view("platform.tutoring.planning");
    }

    public function loadUserPanelAjax($sessionid)
    {
        $query = TutoringSession::query()->where("id", "=", $sessionid);

        if ($query->count() <= 0)
            abort(404, "Sessie niet gevonden.");

        $session = $query->first();

        if ($session->tutor->user->id != Auth::id() && $session->tutee->user->id != Auth::id())
            abort(404, "Unauthorized to see this panel");

        $fullsession = TutoringSession::query()->where("id", "=", $sessionid)->select(["id", "tutor_id", "tutee_id", "active", "updated_at", "created_at"])->with([
            'tutor' => function ($query) {
                $query->select("id", "user_id", "course_id", "active", "updated_at", "created_at")->with([
                    'user' => function ($query) {
                        $query->select("id", "first_name", "last_name", "email", "image", "campusid", "fosid")->with([
                            'campus' => function ($query) {
                                $query->select("id", "name");
                            },
                            'field' => function ($query) {
                                $query->select("id", "name");
                            }
                        ]);
                    },
                    'course' => function ($query) {
                        $query->select("id", "name");
                    }
                ]);
            },
            'tutee' => function ($query) {
                $query->select("id", "user_id", "course_id", "description", "need_exercises", "need_explanation", "need_studying", "active", "updated_at", "created_at")->with([
                    'user' => function ($query) {
                        $query->select("id", "first_name", "last_name", "email", "image", "campusid", "fosid")->with([
                            'campus' => function ($query) {
                                $query->select("id", "name");
                            },
                            'field' => function ($query) {
                                $query->select("id", "name");
                            }
                        ]);
                    },
                    'course' => function ($query) {
                        $query->select("id", "name");
                    }
                ]);
            }
        ])->first();

        return $fullsession;
    }
}