<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 22/12/2017
 * Time: 15:57
 */

namespace App\Http\Controllers;

use App\Helpers\HttpHelper;
use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class CanvasRegisterController extends Controller
{
    public function index()
    {
        $canvas_url = env('CANVAS_URL', "");
        $canvas_client_id = env('CANVAS_CLIENT_ID', "");
        $canvas_callback = route('canvas_oauth_complete');

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
        /* GET TOKENS */
        $params = [
            'grant_type' => "authorization_code",
            'client_id' => env('CANVAS_CLIENT_ID', ""),
            'client_secret' => env('CANVAS_SECRET', ""),
            'code' => $request->code
        ];

        $client = HttpHelper::canvasRequest("login/oauth2/token", "POST", null, $params);

        $client = json_decode($client->getBody(), true);

        Log::info($client);

        $access_token = $client['access_token'];
        $refresh_token = $client['refresh_token'];

        /* GET USER */
        $headers = [
            'Authorization' => 'Bearer ' . $access_token
        ];

        $client = HttpHelper::canvasRequest("/api/v1/users/self", "GET", $headers, null);
        $client = json_decode($client->getBody(), true);


        if (isset($client['login_id']) && isset($client['id'])) {
            $user = User::query()
                ->where("canvas_email", "=", $client['login_id'])
                ->where("canvas_id", "=", $client['id'])
                ->first();

            if ($user != null) {
                $user->canvas_key = $access_token;
                $user->canvas_refresh = $refresh_token;
                $user->save();
                Auth::login($user);

                return Redirect::to("/home");
            } else {
                $user = new User();
                $user->canvas_key = $access_token;
                $user->canvas_refresh = $refresh_token;
                $user->canvas_email = $client['login_id'];
                $user->canvas_id = $client['id'];
                $user->save();
                Auth::login($user);

                return Redirect::to("/register/2");
            }
        } else {
            return Redirect::to("/");
        }

        return Redirect::to('/home');
    }
}