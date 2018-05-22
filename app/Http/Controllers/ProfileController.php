<?php

namespace App\Http\Controllers;

use App\Course;
use App\File;
use App\PublicationYear;
use Illuminate\Http\Request;
use App\Campus;
use App\Fos;
use App\User;
use App\Download;
use Auth;
use Illuminate\Support\Facades\Log;
use Redirect;
use Session;
use App\UserCourse;
use App\Preference;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        $params = [
            'email' => Auth::user()->email,
            'username' => Auth::user()->username,
            'user' => Auth::user(),
        ];
        return view('platform.profile.index', $params);
    }

    public function settings()
    {
        $params = [
            'campuses' => Campus::query()->orderBy("name")->get(),
            'foses' => Fos::query()->orderBy("name")->get(),
            'email' => Auth::user()->email,
            'username' => Auth::user()->username,
            'user' => Auth::user(),
            'usercourses' => Usercourse::all()->where('user_id', '=', Auth::id()),
            'allcourses' => Course::all(),
            'pref' => Auth::user()->preference,
        ];
        return view('platform.profile.settings', $params);
    }

    public function updateprofilepost(Request $request)
    {
        $user = Auth::user();
        $campus = $request->campus;
        $fos = $request->fos;
        $woonplaats = $request->woonplaats;
        $username = $request->username;
        $email = $request->email;
        $avatar = $request->file('avatar');
        $firstname = $request->firstname;
        $lastname = $request->lastname;

        if (!empty($campus)) {
            $user->campusid = $campus;
        }

        if (!empty($fos)) {
            $user->fosid = $fos;
        }

        if (!empty($username)) {
            $user->username = $username;
        }

        if (!empty($firstname)) {
            $user->first_name = $firstname;
        }

        if (!empty($lastname)) {
            $user->last_name = $lastname;
        }

        if (!empty($email)) {
            $user->email = $email;
        }

        if ($request->hasFile('avatar')) {
            $img = $avatar;
            $img_name = time() . '_' . $img->getClientOriginalName();
            $img_location = public_path('/img/avatars/' . $img_name);
            Image::make($img)->resize(64, 64, function ($image) {
                $image->aspectRatio();
                $image->upsize();
            })->save($img_location);
            $user->image = $img_name;
        }
        $user->save();
        Session::flash('message', "Uw profiel werd bijgewerkt!");
        return Redirect::back();
    }

    public function ratings()
    {
        return view("platform.profile.ratings");
    }

    public function downloads()
    {
        $arr = [
            'userdownloads' => Download::query()->where("user_id", "=", Auth::id())->get(),
        ];
        return view("platform.profile.downloads", $arr);
    }

    public function uploads()
    {
        return view("platform.profile.uploads");
    }

    public function notifications()
    {
        return view("platform.profile.notifications");
    }

    public function addusercourse($course_id)
    {
        //TODO kan beter met ajax
        $usercourse = new UserCourse();
        $usercourse->user_id = Auth::id();
        $usercourse->course_id = $course_id;
        $usercourse->save();
        Session::flash('message', "Vak toegevoegd!");
        return Redirect::back();
    }

    public function removeusercourse($id)
    {
        //TODO kan beter met ajax
        $usercourse = UserCourse::where('id', "=", $id);
        $usercourse->delete();
        Session::flash('message', "Vak verwijderd!");
        return Redirect::back();
    }

    public function ajaxFilter(Request $request)
    {
        //id's of current user courses
        $currentUserCoursesIds = Usercourse::all()->where('user_id', '=', Auth::id())->pluck('course_id')->toArray();
        //only show courses that are not yet added to a user
        if ($request->search != "") {
            $r = Course::query()
                ->where("name", "LIKE", "%" . $request->search . "%")
                ->whereNotIn('id', $currentUserCoursesIds)
                ->get();
        }

        if ($request->search == "") {
            $r = "";
        }
        return $r;
    }

    public function updatepreferencepost(Request $request)
    {
        $user = Auth::user();
        //get notification type
        $type = $request->notification_type;
        //update type preference
        if ($user->preference[$type] == true) {
            $user->preference[$type] = false;
        } else {
            $user->preference[$type] = true;
        }
        $user->preference->save();
    }

    public function updatethemepost(Request $request)
    {
        $user = Auth::user();
        //get theme
        $theme = $request->theme;
        //update theme
        $user->preference->theme = $theme;
        $user->preference->save();
    }
}
