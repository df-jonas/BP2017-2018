<?php
/**
 * Created by PhpStorm.
 * User: arnostalpaert
 * Date: 15/05/18
 * Time: 15:27
 */

namespace App\Helpers;

use App\Notification;

class NotificationHelper
{
    static public function create($from, $to, $type, $url, $text)
    {
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
}