<?php

namespace App\Http\Controllers;

use App\User;
use App\Course;
use App\Group;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->role != "admin")
            abort(500, "Je hebt geen toelating om deze pagina te bezoeken.");

        $arr = [
            'users' => User::paginate(15, ['*'], 'up'),
            'courses' => Course::paginate(15, ['*'], 'cp'),
            'groups' => Group::paginate(15, ['*'], 'gp'),
        ];
        return view('platform.admin.index', $arr);

    }

    public function courses()
    {
        if (Auth::user()->role != "admin")
            abort(500, "Je hebt geen toelating om deze pagina te bezoeken.");

        $arr = [
            'users' => User::paginate(15, ['*'], 'up'),
            'courses' => Course::paginate(15, ['*'], 'cp'),
            'groups' => Group::paginate(15, ['*'], 'gp'),
        ];
        return view('platform.admin.index', $arr);
    }

    public function groups()
    {
        if (Auth::user()->role != "admin")
            abort(500, "Je hebt geen toelating om deze pagina te bezoeken.");

        $arr = [
            'users' => User::paginate(15, ['*'], 'up'),
            'courses' => Course::paginate(15, ['*'], 'cp'),
            'groups' => Group::paginate(15, ['*'], 'gp'),
        ];

        return view('platform.admin.index', $arr);
    }

    public function stats()
    {
        if (Auth::user()->role != "admin")
            abort(500, "Je hebt geen toelating om deze pagina te bezoeken.");

        $arr = [
            'users' => User::paginate(15, ['*'], 'up'),
            'courses' => Course::paginate(15, ['*'], 'cp'),
            'groups' => Group::paginate(15, ['*'], 'gp'),
        ];

        return view('platform.admin.index', $arr);
    }
}
