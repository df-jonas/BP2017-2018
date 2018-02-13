<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        return view("platform.community.index");
    }


    public function newPost(Request $request)
    {
        return view("platform.community.new");
    }
}
