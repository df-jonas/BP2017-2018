<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return response(json_encode(
			array(
				"name" => "UniHelp",
				"creators" => array("Jonas De Frere", "Arno Stalpaert"),
				"status" => "green"
			)
    ))->header('Content-Type', 'application/json');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


