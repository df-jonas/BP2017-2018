<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 11/11/2017
 * Time: 16:08
 */

namespace App\Http\Controllers;

use App\Helpers\HttpRequestHelper;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CanvasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->hasCanvasAuth()) {
            return Redirect::to('/home');
        } else {
            $canvas_url = env('CANVAS_URL', "");
            $canvas_client_id = env('CANVAS_CLIENT_ID', "");
            $canvas_state = Auth::user()->id;
            $canvas_callback = route('canvas_oauth_complete');
            return Redirect::to($canvas_url . "/login/oauth2/auth?grant_type=authorization_code&client_id=" . $canvas_client_id . "&response_type=code" . "&state=" . $canvas_state . "&redirect_uri=" . $canvas_callback);
        }
    }

    public function oauth_complete(Request $request)
    {
        if (Auth::user()->hasCanvasAuth()) {

            return Redirect::to('/home');

        } else {

            if (isset($request->code)) {

                // OAuth code is set
                try {

                    $params = [
                        'grant_type' => "authorization_code",
                        'client_id' => env('CANVAS_CLIENT_ID', ""),
                        'client_secret' => env('CANVAS_SECRET', ""),
                        'redirect_url' => route('canvas_oauth_complete'),
                        'code' => "$request->code",
                        'refresh_token' => ""
                    ];

                    $response = HttpRequestHelper::HttpRequest(
                        env('CANVAS_URL', "") . "login/oauth2/token",
                        "POST",
                        null,
                        $params,
                        false
                    )->getBody();

                    $response = json_decode($response, true);

                    $user = Auth::user();
                    $user->canvas_key = $response['access_token'];
                    $user->canvas_refresh = $response['refresh_token'];
                    $user->save();

                    return Redirect::to('/home');

                } catch (ClientException $exception) {
                    return Redirect::to('/test_canvas/login');
                }
            } else {
                return Redirect::to('/test_canvas/login');
            }
        }
    }

    public function me()
    {
        $canvasauth = Auth::user()->getCanvasAuth();
        if ($canvasauth !== false) {
            $request = HttpRequestHelper::HttpRequest(env('CANVAS_URL', "") . "/api/v1/users/self", "GET", ['Authorization' => 'Bearer ' . Auth::user()->getCanvasAuth()['canvas_key']], null, false);
            return response()->json(json_decode($request->getBody(), true), $request->getStatusCode());
        }
        return response()->json(array("error" => "you are not authenticated through canvas yet."),404);
    }
}