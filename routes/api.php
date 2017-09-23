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
    return response()->json(array("name" => "UniHelp", "creators" => array("Jonas De Frere", "Arno Stalpaert"), "status" => "green"), 200);
});

/**
 * Let user register through API
 */
Route::post('register', 'Auth\RegisterController@register');

/**
 * Let user obtain API-token through API
 */
Route::post('login', 'Auth\LoginController@login');

/**
 * Authenticated routes
 */
Route::group(['middleware' => 'auth:api'], function () {

    Route::group(['prefix' => 'user'], function () {
        Route::get('', function (Request $request) {
            return $request->user();
        });
    });

    Route::group(['prefix' => 'items'], function () {
        Route::get('', 'ItemController@index');
        Route::post('', 'ItemController@store');
        Route::get('{item}', 'ItemController@show');
        Route::put('{item}', 'ItemController@update');
        Route::delete('{item}', 'ItemController@delete');
    });
});


