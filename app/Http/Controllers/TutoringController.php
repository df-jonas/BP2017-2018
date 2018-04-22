<?php

namespace App\Http\Controllers;

use App\Course;
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
        $owned_tutee = Tutee::query()
            ->where('user_id', '=', Auth::id())
            ->get(['id']);

        $owned_tutor = Tutor::query()
            ->where('user_id', '=', Auth::id())
            ->get(['id']);

        $sessions = TutoringSession::query()
            ->whereIn('tutor_id', $owned_tutor)
            ->orWhereIn('tutee_id', $owned_tutee)
            ->get();

        $arr = [
            'sessions' => $sessions
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
            abort(404);

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
            abort(500);

        $course = Course::query()->where('id', '=', $request->course)->first();

        if ($course == null)
            abort(404);

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

    public function help()
    {
        return view("platform.tutoring.help");
    }

    public function messages()
    {
        return view("platform.tutoring.messages");
    }

    public function planning()
    {
        return view("platform.tutoring.planning");
    }


}
