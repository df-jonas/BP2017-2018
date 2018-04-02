<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Group;
use App\GroupCategory;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        // TODO create new group for administrators
        // return view("platform.community.groupnew");
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
        $group = Group::query()
            ->where("url", "=", $group_id)
            ->firstOrFail();

        $arr = [
            'group' => $group
        ];

        return view("platform.community.postnew", $arr);
    }

    public function postdetail($group_id, $post_id)
    {
        $myposts = Post::query()
            ->where("user_id", "=", Auth::user()->id)
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

    public function newpostpost($group_id, Request $request)
    {
        $group = Group::query()
            ->where("url", "=", $group_id)
            ->firstOrFail();

        if ($group->url != $request->url)
            abort(404);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->get('content');
        $post->user_id = Auth::user()->id;
        $post->group_id = $group->id;
        $post->save();

        return redirect(route('community-post-detail', ['group_id' => $group->url, 'post_id' => $post->id]));
    }

    public function addcommentasync($group_id, $post_id, Request $request)
    {
        $group = Group::query()
            ->where("url", "=", $group_id)
            ->firstOrFail();

        $post = Post::query()
            ->where("id", "=", $post_id)
            ->firstOrFail();

        if ($post->group->id != $group->id)
            abort(404);

        $comment = new Comment();
        $comment->content = $request->comment;
        $comment->post_id = $post->id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return response()->json(Comment::query()->where('id', '=', $comment->id)->with(['user' => function ($query) {
            $query->select('id', 'first_name', 'last_name', 'image');
        }])->firstOrFail());
    }
}
