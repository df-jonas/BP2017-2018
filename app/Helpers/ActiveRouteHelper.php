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
        Log::info($q);
        return Request::is(substr($q, 1) . '*') ? true : false;
    }

    public static function getState($route_prefix)
    {
        return self::isActive($route_prefix) ? 'uh-active' : 'uh-notactive';
    }
}