<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 22/12/2017
 * Time: 16:08
 */

namespace App\Helpers;


use Illuminate\Support\Facades\Auth;

class CanvasHelper
{
    static public function refreshToken()
    {
        $params = [
            'grant_type' => "refresh_token",
            'client_id' => env('CANVAS_CLIENT_ID', ""),
            'client_secret' => env('CANVAS_SECRET', ""),
            'refresh_token' => Auth::user()->canvas_refresh
        ];

        $response = HttpHelper::canvasRequest("login/oauth2/token", "POST", null, $params)->getBody();

        $response = json_decode($response, true);

        $user = Auth::user();
        $user->canvas_key = $response['access_token'];
        $user->save();
    }
}