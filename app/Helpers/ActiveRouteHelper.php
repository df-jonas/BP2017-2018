<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 2/04/2018
 * Time: 14:25
 */

namespace App\Helpers;


use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class ActiveRouteHelper
{
    public static function isActive($q)
    {
        $pattern = substr($q, 1) . '*';

        if ($q == "/")
            $pattern = $q;

        return Request::is($pattern) ? true : false;
    }

    public static function getState($route_prefix, $active_class = 'uh-active', $normal_class = 'uh-notactive')
    {
        return self::isActive($route_prefix) ? $active_class : $normal_class;
    }
}