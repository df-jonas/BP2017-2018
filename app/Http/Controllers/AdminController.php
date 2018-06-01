<?php

namespace App\Http\Controllers;

use App\User;
use App\Course;
use App\Group;

class AdminController extends Controller
{
    public function index()
    {
        $arr = [
            'users' => User::paginate(15, ['*'], 'up'),
            'courses' => Course::paginate(15, ['*'], 'cp'),
            'groups' => Group::paginate(15, ['*'], 'gp'),
        ];
        return view('platform.admin.index', $arr);
    }
}
