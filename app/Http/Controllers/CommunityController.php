<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Group;
use App\GroupCategory;
use App\Helpers\NotificationHelper;
use App\Post;
use App\User;
use App\Vote;
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
            'myposts' => $myposts,
            'stats' => [
                'groups' => Group::query()->count(),
                'posts' => Post::query()->count(),
                'comments' => Comment::query()->count(),
                'users' => User::query()->count()
            ]
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

        $posts = $group->posts()->paginate(10);

        $myposts = Post::query()
            ->where("user_id", "=", Auth::user()->id)
            ->orderBy("created_at", "desc")
            ->take(5)
            ->get();

        $arr = [
            'group' => $group,
            'myposts' => $myposts,
            'posts' => $posts
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
            abort(404, "Deze post werd niet gevonden.");

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
            abort(500, "Er ging iets mis bij het opslaan van deze post.");

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
            abort(500, "Er ging iets mis bij het opslaan van deze comment.");

        $comment = new Comment();
        $comment->content = $request->comment;
        $comment->post_id = $post->id;
        $comment->user_id = Auth::user()->id;

        $comment->save();

        $from_id = Auth::id();
        $to_id = $post->user->id;
        $type = "comment";
        $url = route('community-post-detail', [
            'group_id' => $comment->post->group->url,
            'post_id' => $comment->post->id
        ]);
        $text = "heeft een nieuwe reactie geplaatst.";

        NotificationHelper::create($from_id, $to_id, $type, $url, $text);

        return response()->json(Comment::query()->where('id', '=', $comment->id)->with(['user' => function ($query) {
            $query->select('id', 'first_name', 'last_name', 'image');
        }])->firstOrFail());
    }

    public function ajaxFilter(Request $request)
    {
        $q = Post::query();

        if ($request->search != "") {
            $q->where("title", "LIKE", "%" . $request->search . "%");
        }

        if (!empty($request->category) && sizeof($request->category) > 0) {
            $q->whereIn("group_id", $request->category);
        }

        $returnarr = $q->select(["id", "title", "user_id", "group_id", "created_at"])->with([
            'user' => function ($query) {
                $query->select("id", "first_name", "last_name", "image");
            },
            'group' => function ($query) {
                $query->select("id", "url", "name");
            },
        ])->orderBy('id', 'desc')->get();

        foreach ($returnarr as $post) {
            $post['commentcount'] = $post->commentcount();
            $post['votesum'] = $post->votesum();
        }

        return $returnarr;
    }

    public function postLikepost(Request $request)
    {
        if (!empty($request->post_id)) {
            $post_id = $request->post_id;
            $post = Post::where('id', '=', $post_id)->first();
            $vote = Vote::query()
                ->where("user_id", "=", Auth::id())
                ->where("post_id", "=", $post_id)
                ->get()
                ->first();
            if ($vote != null) {
                $vote->delete();
            } else {
                $vote = new Vote();
                $vote->value = true;
                $vote->post_id = $post_id;
                $vote->user_id = Auth::id();
                $vote->save();

                $from_id = Auth::id();
                $to_id = $post->user_id;
                $type = "likes";
                $url = $post->generateurl();
                $text = "likete jouw post";

                dd(NotificationHelper::create($from_id, $to_id, $type, $url, $text));
            }
        }
    }
}
