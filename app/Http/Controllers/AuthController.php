<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 22/12/2017
 * Time: 15:57
 */

namespace App\Http\Controllers;

use App\Campus;
use App\Fos;
use App\Helpers\HttpHelper;
use App\Notifications\UserRegistered;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Image;

class AuthController extends Controller
{
    public function index()
    {
        $canvas_url = env('CANVAS_URL', "");
        $canvas_client_id = env('CANVAS_CLIENT_ID', "");
        $canvas_callback = route('canvas-oauth-complete');

        return Redirect::to(
            $canvas_url . "/login/oauth2/auth?" .
            "grant_type=authorization_code" .
            "&client_id=" . $canvas_client_id .
            "&response_type=code" .
            "&redirect_uri=" . $canvas_callback
        );
    }

    public function oauth_complete(Request $request)
    {
        // POST values to initiate token exchange
        $params = [
            'grant_type' => "authorization_code",
            'client_id' => env('CANVAS_CLIENT_ID', ""),
            'client_secret' => env('CANVAS_SECRET', ""),
            'code' => $request->code
        ];
        $client = HttpHelper::canvasRequest("login/oauth2/token", "POST", null, $params);
        $client = json_decode($client->getBody(), true);
        $access_token = $client['access_token'];
        $refresh_token = $client['refresh_token'];

        // GET user info from /users/self with obtained tokens
        $headers = ['Authorization' => 'Bearer ' . $access_token];
        $client = HttpHelper::canvasRequest("/api/v1/users/self", "GET", $headers, null);
        $client = json_decode($client->getBody(), true);

        // Decide whether or not a user is new and/or has completed registration & reroute
        if (isset($client['id'])) {
            $user = User::query()
                ->where("canvas_id", "=", $client['id'])
                ->first();

            if ($user != null) {
                $user->canvas_key = $access_token;
                $user->canvas_refresh = $refresh_token;
                $user->save();
                Auth::login($user);

                if (isset(Auth::user()->email) && isset(Auth::user()->name) && isset(Auth::user()->username)) {
                    return Redirect::to(route('sharing-index'));
                } else {
                    return Redirect::to(route('register'));
                }
            } else {
                $user = new User();
                $user->canvas_key = $access_token;
                $user->canvas_refresh = $refresh_token;
                $user->name = $client['name'];
                $user->canvas_id = $client['id'];
                $user->save();
                Auth::login($user, true);

                return Redirect::to("/register");
            }
        } else {
            return Redirect::to("/");
        }
    }

    public function register()
    {
        if (Auth::check() && Auth::user()->isValid())
            return Redirect::to(route('sharing-index'));

        $params = [
            'name' => Auth::user()->name,
            'campuses' => Campus::query()->orderBy("name")->get(),
            'foses' => Fos::query()->orderBy("name")->get(),
        ];
        return view("website.register", $params);
    }

    public function login()
    {
        if (Auth::check() && Auth::user()->isValid()) {
            return Redirect::to(route('sharing-index'));

        }
        return view("website.login");
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to(route('website-index'));
    }

    public function registerPost(Request $request)
    {
        if (isset($request->username) && isset($request->tnc)) {

            //TODO validation
            $user = Auth::user();
            $user->fosid = $request->fos;
            $user->campusid = $request->campus;
            $user->email = $request->email;
            $user->username = $request->username;

            //image, gebruik van image intervention library
            if ($request->hasFile('avatar')) {
                $img = $request->file('avatar');
                $img_name = time() . '_' . $img->getClientOriginalName();
                $img_location = public_path('/img/avatars/' . $img_name);

                Image::make($img)->resize(64, 64, function ($image) {
                    $image->aspectRatio();
                    $image->upsize();
                })->save($img_location);

                $user->image = $img_name;
            }

            $user->save();
            //user mail na register
            //$user->notify(new UserRegistered($user));
            return Redirect::to(route('sharing-index'));
        }
        return Redirect::to(route('register'));
    }
}