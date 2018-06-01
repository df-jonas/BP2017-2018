<?php

namespace App\Http\Controllers;

use App\Course;
use App\File;
use App\Post;
use App\Rating;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Campus;
use App\Fos;
use App\Download;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\UserCourse;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        $myposts = Post::query()
            ->where("user_id", "=", Auth::user()->id)
            ->orderBy("created_at", "desc")
            ->take(10)
            ->get();

        $myfiles = File::query()
            ->where("user_id", "=", Auth::user()->id)
            ->orderBy("created_at", "desc")
            ->take(10)
            ->get();

        $params = [
            'email' => Auth::user()->email,
            'username' => Auth::user()->username,
            'user' => Auth::user(),
            'files' => $myfiles,
            'posts' => $myposts,
            'address' => Auth::user()->address,
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

        if (!empty($firstname)) {
            $user->first_name = $firstname;
        }

        if (!empty($lastname)) {
            $user->last_name = $lastname;
        }

        if (!empty($email)) {
            $user->email = $email;
        }

        if (!empty($woonplaats)) {
            $user->address = $woonplaats;
        }

        if ($request->hasFile('avatar')) {
            $img = $avatar;
            $img_name = time() . '_' . $img->getClientOriginalName();
            $img_location = public_path('/img/avatars/' . $img_name);
            Image::make($img)->resize(256, 256, function ($image) {
                $image->aspectRatio();
                $image->upsize();
            })->save($img_location);
            $user->image = $img_name;
        }
        $user->save();
        Session::flash('message', "Uw profiel werd bijgewerkt!");
        return Redirect::back();
    }

    public function closeprofilepost(Request $request)
    {
        $firstname = Auth::user()->first_name;
        $lastname = Auth::user()->last_name;
        $email = Auth::user()->email;
        $name = $firstname . " " . $lastname;

        if (!empty($request->account_close)) {
            Mail::send('mail.forms.account-delete', ['firstname' => $firstname, 'lastname' => $lastname, 'email' => $email], function ($message) use ($name, $email) {
                $message->from($email, $name);
                $message->subject("Unihelp - aanvraag tot account verwijdering");
                $message->to('info@unihelp.be');
            });
            Session::flash('message', "Aanvraag tot verwijdering werd ingediend!");
        }

        return Redirect::back();
    }

    public function ratings()
    {
        $arr = [
            "ratings" => Rating::query()->where("userid", "=", Auth::id())->get()
        ];
        return view("platform.profile.ratings", $arr);
    }

    public function downloads()
    {
        $arr = [
            'downloads' => Download::query()->where("user_id", "=", Auth::id())->get(),
        ];

        return view("platform.profile.downloads", $arr);
    }

    public function uploads()
    {
        $arr = [
            'uploads' => File::query()->where("user_id", "=", Auth::id())->get()
        ];
        return view("platform.profile.uploads", $arr);
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
        $usercourse = UserCourse::query()->where('id', "=", $id);
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
