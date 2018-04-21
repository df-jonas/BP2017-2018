<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view("platform.profile.index");
    }

    public function ratings()
    {
        return view("platform.profile.ratings");
    }

    public function downloads()
    {
        return view("platform.profile.downloads");
    }

    public function uploads()
    {
        return view("platform.profile.uploads");
    }
}
