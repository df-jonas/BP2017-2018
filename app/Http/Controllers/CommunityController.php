<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        return view("home");
    }
}
