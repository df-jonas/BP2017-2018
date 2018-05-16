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
use Redirect;
use Session;
use App\Notification;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        // TODO Alle vakken van gebruiker ophalen
        $params = [
            'campuses' => Campus::query()->orderBy("name")->get(),
            'foses' => Fos::query()->orderBy("name")->get(),
            'email' => Auth::user()->email,
            'username' => Auth::user()->username,
            'user' => Auth::user(),
        ];
        return view('platform.profile.index', $params);
    }
    public function updateprofilepost(Request $request){
        $user = Auth::user();
        $campus = $request->campus;
        $fos = $request->fos;
        $woonplaats = $request->woonplaats;
        $username = $request->username;
        $email = $request->email;
        $avatar = $request->file('avatar');
        $firstname = $request->firstname;
        $lastname = $request->lastname;


        if(!empty($campus)) {
            $user->campusid = $campus;
        }

        if(!empty($fos)) {
            $user->fosid = $fos;
        }

        if(!empty($username)) {
            $user->username = $username;
        }

        if(!empty($firstname)) {
            $user->first_name = $firstname;
        }

        if(!empty($lastname)) {
            $user->last_name = $lastname;
        }


        if(!empty($email)) {
            $user->email = $email;
        }

        if($request->hasFile('avatar')) {
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
}
