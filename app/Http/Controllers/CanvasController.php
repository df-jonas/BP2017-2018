<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 11/11/2017
 * Time: 16:08
 */

namespace App\Http\Controllers;

use App\Helpers\HttpHelper as Http;
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
        if (Auth::user()->hasCanvasAuth())
            return Redirect::to('/home');

        $canvas_url = env('CANVAS_URL', "");
        $canvas_client_id = env('CANVAS_CLIENT_ID', "");
        $canvas_state = Auth::user()->id;
        $canvas_callback = route('canvas_oauth_complete');

        return Redirect::to($canvas_url . "/login/oauth2/auth?grant_type=authorization_code&client_id=" . $canvas_client_id . "&response_type=code" . "&state=" . $canvas_state . "&redirect_uri=" . $canvas_callback);
    }

    public function oauth_complete(Request $request)
    {
        if (Auth::user()->hasCanvasAuth())
            return Redirect::to('/home');

        if (isset($request->error))
            return response()->json(array("error" => $request->error), 400);

        if (!isset($request->code))
            return Redirect::to('/test_canvas/login');

        $params = [
            'grant_type' => "authorization_code",
            'client_id' => env('CANVAS_CLIENT_ID', ""),
            'client_secret' => env('CANVAS_SECRET', ""),
            'redirect_url' => route('canvas_oauth_complete'),
            'code' => "$request->code"
        ];

        $response = $this->request("login/oauth2/token", "POST", null, $params)->getBody();

        $response = json_decode($response, true);

        $user = Auth::user();
        $user->canvas_key = $response['access_token'];
        $user->canvas_refresh = $response['refresh_token'];
        $user->save();

        return Redirect::to('/home');
    }

    public function me()
    {
        $auth = Auth::user()->getCanvasAuth();

        if ($auth === false)
            return response()->json(array("error" => "You are not authenticated through canvas."), 400);

        $headers = [
            'Authorization' => 'Bearer ' . $auth['canvas_key']
        ];

        $request = $this->request("/api/v1/users/self", "GET", $headers, null);

        return response()->json(json_decode($request->getBody(), true), $request->getStatusCode());
    }

    public function request($path, $verb, $headers, $params)
    {
        $request = Http::request(
            env('CANVAS_URL', "") . $path,
            $verb,
            $headers,
            $params,
            false
        );

        if ($request->getStatusCode() == 401) {

            $this->refreshToken();

            $request = Http::request(
                env('CANVAS_URL', "") . $path,
                $verb,
                $headers,
                $params,
                false
            );
        }

        return $request;
    }

    public function refreshToken(){
        $params = [
            'grant_type' => "refresh_token",
            'client_id' => env('CANVAS_CLIENT_ID', ""),
            'client_secret' => env('CANVAS_SECRET', ""),
            'refresh_token' => Auth::user()->canvas_refresh
        ];

        $response = $this->request("login/oauth2/token", "POST", null, $params)->getBody();

        $response = json_decode($response, true);

        $user = Auth::user();
        $user->canvas_key = $response['access_token'];
        $user->save();
    }
}