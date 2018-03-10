<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutoringController extends Controller
{
    public function index()
    {
        return view("platform.tutoring.index");
    }

    public function newtutor()
    {
        return view("platform.tutoring.tutornew");
    }

    public function newtutee()
    {
        return view("platform.tutoring.tuteenew");
    }

    public function help()
    {
        return view("platform.tutoring.help");
    }
}
