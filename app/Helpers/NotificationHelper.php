<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 15/05/18
 * Time: 15:27
 */

namespace App\Helpers;

use App\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationHelper
{
    static public function create($from, $to, $type, $url, $text)
    {
        if (self::canNotify($type)) {
            $notification = new Notification();

            $notification->from_user = $from;
            $notification->to_user = $to;
            $notification->type = $type;
            $notification->url = $url;
            $notification->text = $text;
            $notification->read_at = null;
            $notification->save();

            return $notification;
        }

        return null;
    }

    static public function canNotify($type)
    {
        switch ($type) {
            case "comment":
                if (Auth::user()->preference->comment == true)
                    return true;
                break;
            case "likes":
                if (Auth::user()->preference->likes == true)
                    return true;
                break;
            case "tutoring":
                if (Auth::user()->preference->tutoring == true)
                    return true;
                break;
            case "account":
                if (Auth::user()->preference->account == true)
                    return true;
                break;

            default:
                return true;
        }

        return false;
    }
}