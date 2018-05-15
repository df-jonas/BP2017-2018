<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{

    //TODO moet met ajax
    public function readAjax($id)
    {
        $user = Auth::user();
        $notification = $user->notifs->where('id', $id)->first();
        if (!$notification->isRead()) {
            $notification->markAsRead();
        }
    }

}
