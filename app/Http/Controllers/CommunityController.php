<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        return view("platform.community.index");
    }


    public function group(Request $request)
    {
        return view("platform.community.groepen");
    }

    public function groupdetail(Request $request)
    {
        return view("platform.community.detail");
    }

    public function newpost(Request $request)
    {
        return view("platform.community.newpost");
    }


    public function newgroup(Request $request)
    {
        return view("platform.community.new");
    }
}
