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
use Laravel\Socialite\Facades\Socialite;

class CanvasController extends Controller
{
    public function __construct()
    {
    }

    public function me()
    {
        $auth = Auth::user();

        if ($auth === false)
            return response()->json(array("error" => "You are not authenticated through canvas."), 400);

        $headers = [
            'Authorization' => 'Bearer ' . $auth['canvas_key']
        ];

        $request = Http::canvasRequest("/api/v1/users/self", "GET", $headers, null);

        return response()->json(json_decode($request->getBody(), true), $request->getStatusCode());
    }
}