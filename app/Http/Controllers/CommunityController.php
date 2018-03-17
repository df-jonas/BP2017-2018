<?php

namespace App\Http\Controllers;

use App\Group;
use App\GroupCategory;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    public function index()
    {
        $myposts = Post::query()
            ->where("user_id", "=", Auth::user()->id)
            ->orderBy("created_at", "desc")
            ->take(5)
            ->get();

        $categories = GroupCategory::all();

        $arr = [
            'categories' => $categories,
            'myposts' => $myposts
        ];

        return view("platform.community.index", $arr);
    }

    public function newgroup()
    {
        return view("platform.community.groupnew");
    }

    public function groupdetail($group_id)
    {
        $group = Group::query()
            ->where("url", "=", $group_id)
            ->firstOrFail();

        $myposts = Post::query()
            ->where("user_id", "=", Auth::user()->id)
            ->orderBy("created_at", "desc")
            ->take(5)
            ->get();

        $arr = [
            'group' => $group,
            'myposts' => $myposts
        ];

        return view("platform.community.groupdetail", $arr);
    }

    public function newpost($group_id)
    {
        return view("platform.community.postnew");
    }

    public function postdetail($group_id, $post_id)
    {
        $myposts = Post::query()
            ->where("id", "=", Auth::user()->id)
            ->orderBy("created_at", "desc")
            ->take(5)
            ->get();

        $post = Post::query()
            ->where("id", "=", $post_id)
            ->firstOrFail();

        if ($post->group->url != $group_id)
            abort(404);

        $arr = [
            'myposts' => $myposts,
            'post' => $post
        ];

        return view("platform.community.postdetail", $arr);
    }

    public function newgrouppost(Request $request)
    {
    }

    public function newpostpost(Request $request)
    {
    }
}
