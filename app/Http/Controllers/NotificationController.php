<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NotificationController extends Controller
{
    public function readAjax($id)
    {
        $notification = Notification::query()
            ->where("to_user", "=", Auth::id())
            ->where('id', "=", $id)
            ->first();

        if (!$notification->isRead()) {
            $notification->markAsRead();
            $notification->save();
        }

        return Redirect::back();
    }
}
