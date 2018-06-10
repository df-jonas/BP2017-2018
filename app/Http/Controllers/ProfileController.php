<?php

namespace App\Http\Controllers;

use App\Course;
use App\File;
use App\Notification;
use App\Post;
use App\Rating;
use App\User;
use Illuminate\Http\Request;
use App\Campus;
use App\Fos;
use App\Download;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\UserCourse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::query()
            ->find($id);

        if ($user == null)
            abort(404, "Gebruiker niet gevonden");

        $myposts = Post::query()
            ->where("user_id", "=", $user->id)
            ->orderBy("created_at", "desc")
            ->take(15)
            ->get();

        $myfiles = File::query()
            ->where("user_id", "=", $user->id)
            ->orderBy("created_at", "desc")
            ->take(15)
            ->get();

        $mycourses = UserCourse::query()
            ->where("user_id", "=", $user->id)
            ->orderBy("created_at", "desc")
            ->take(15)
            ->get();

        $params = [
            'email' => $user->email,
            'username' => $user->username,
            'user' => $user,
            'files' => $myfiles,
            'posts' => $myposts,
            'address' => $user->address,
            'mycourses' => $mycourses,
        ];
        return view('platform.profile.index', $params);
    }

    public function settings()
    {
        $u = Auth::user();
        $isInit = ($u->canvas_key != "" && $u->canvas_key != null && !empty($u->canvas_key))
            && ($u->canvas_refresh != "" && $u->canvas_refresh != null && !empty($u->canvas_refresh))
            && ($u->canvas_id != "" && $u->canvas_id != null && !empty($u->canvas_id));

        $params = [
            'campuses' => Campus::query()->orderBy("name")->get(),
            'foses' => Fos::query()->orderBy("name")->get(),
            'email' => Auth::user()->email,
            'username' => Auth::user()->username,
            'user' => Auth::user(),
            'usercourses' => Usercourse::all()->where('user_id', '=', Auth::id()),
            'allcourses' => Course::all(),
            'pref' => Auth::user()->preference,
            'canvas' => [
                'isInit' => $isInit
            ]
        ];
        return view('platform.profile.settings', $params);
    }

    public function updateprofilepost(Request $request)
    {
        $user = Auth::user();
        $campus = $request->campus;
        $fos = $request->fos;
        $address = $request->address;
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

        if (!empty($address)) {
            $user->address = $address;
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
                $message->to('dt.unihelp@ehb.be');
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
        $downloads = Download::query()
            ->where("user_id", "=", Auth::id())
            ->orderBy("updated_at", "desc")
            ->get();

        $arr = [
            'downloads' => $downloads
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

    public function notifications(Request $request)
    {
        $q = Notification::query()->where("to_user", "=", Auth::id());
        $all = true;

        if (isset($request['all']) == false || $request['all'] == "false") {
            $all = false;
            $q = $q->where("read_at", "=", null);
        }

        $notifications = $q->orderBy("created_at", "desc")->paginate(10);

        $arr = [
            'notifications' => $notifications,
            'all' => $all
        ];

        return view("platform.profile.notifications", $arr);
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

        $r = array();

        //only show courses that are not yet added to a user
        if ($request->search != "") {
            $r = Course::query()
                ->where("name", "LIKE", "%" . $request->search . "%")
                ->whereNotIn('id', $currentUserCoursesIds)
                ->get();
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
