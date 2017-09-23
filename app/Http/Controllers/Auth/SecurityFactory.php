<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 23/09/2017
 * Time: 18:03
 */

namespace App\Http\Controllers\Auth;


class SecurityFactory
{
    static public function generateApiToken()
    {
        $api_token = str_random(60);
        return $api_token;
    }
}