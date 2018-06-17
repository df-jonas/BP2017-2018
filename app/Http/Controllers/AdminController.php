<?php

namespace App\Http\Controllers;

use App\File;
use App\GroupCategory;
use App\Post;
use App\Tutor;
use App\User;
use App\Course;
use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /* TODO AUTH van jonas erin zetten, staat online, maar niet in mijn versie */

    public function index()
    {

        $arr = [
            'users' => User::paginate(15),
        ];
        return view('platform.admin.index', $arr);

    }

    public function courses()
    {
        $arr = [
            'courses' => Course::paginate(15),
        ];
        return view('platform.admin.courses', $arr);
    }

    public function coursenew()
    {
        return view('platform.courses.new');
    }

    public function courseupdate($id)
    {
        $arr = [
            'course' => Course::find($id),
        ];

        return view('platform.courses.update', $arr);
    }

    public function coursenewpost(Request $request)
    {
        $course = new Course();
        $course->name = $request->title;;
        $course->save();

        return Redirect::back()->with('message', 'Het vak werd toegevoegd!');
    }

    public function courseupdatepost(Request $request)
    {
        $course = Course::find($request->id);
        $course->name = $request->title;
        $course->save();

        return Redirect::back()->with('message', 'Het vak werd bijgewerkt!');
    }

    public function coursedelete($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return Redirect::back()->with('message', 'Het vak werd verwijderd!');
    }

    public function groups()
    {
        $arr = [
            'groups' => Group::paginate(15),
        ];

        return view('platform.admin.groups', $arr);
    }

    public function groupnew()
    {
        $arr = [
            'groups' => Group::paginate(15),
            'categories' => GroupCategory::all(),
        ];

        return view('platform.community.groupnew', $arr);
    }

    public function groupnewpost(Request $request)
    {
        $group = new Group();
        $group->name = $request->title;
        $group->shortdesc = $request->desc;
        $group->url = $request->url;
        $group->user_id = Auth::id();
        $group->category_id = $request->categories;
        $group->icon_id = 1;
        $group->save();

        return Redirect::back()->with('message', 'De groep werd aangemaakt!');
    }

    public function groupupdate($id)
    {
        $arr = [
            'group' => Group::find($id),
            'categories' => GroupCategory::all(),
        ];

        return view('platform.community.groupupdate', $arr);
    }

    public function groupupdatepost(Request $request)
    {
        $group = Group::find($request->id);
        $group->name = $request->title;
        $group->shortdesc = $request->desc;
        $group->url = $request->url;
        $group->category_id = $request->categories;
        $group->save();

        return Redirect::back()->with('message', 'De groep werd bijgewerkt!');
    }

    public function posts()
    {
        $arr = [
            'posts' => Post::paginate(15),
        ];

        return view('platform.admin.posts', $arr);
    }

    public function tutors()
    {
        $arr = [
            'tutors' => Tutor::paginate(15),
        ];

        return view('platform.admin.tutors', $arr);
    }

    public function files()
    {
        $arr = [
            'files' => File::paginate(15),
        ];

        return view('platform.admin.files', $arr);
    }

    public function stats()
    {
        $arr = [
            'users' => User::paginate(15, ['*'], 'up'),
            'courses' => Course::paginate(15, ['*'], 'cp'),
            'groups' => Group::paginate(15, ['*'], 'gp'),
        ];

        return view('platform.admin.stats', $arr);
    }
}
