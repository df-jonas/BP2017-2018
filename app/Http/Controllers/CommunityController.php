<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        return view("platform.community.index");
    }

    public function newgroup()
    {
        return view("platform.community.groupnew");
    }

    public function groupdetail($group_id)
    {
        return view("platform.community.groupdetail");
    }

    public function newpost($group_id)
    {
        return view("platform.community.postnew");
    }

    public function postdetail($group_id, $post_id)
    {
        return view("platform.community.postdetail");
    }

    public function newgrouppost(Request $request)
    {
    }

    public function newpostpost(Request $request)
    {
    }
}
