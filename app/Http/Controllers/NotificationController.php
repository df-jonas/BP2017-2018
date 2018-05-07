<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function delete($id){
        $user = Auth::user();
        $notification = $user->notifications()->where('id', $id)->first();
        if ($notification)
        {
            $notification->delete();
            return back();
        }
        else
            return back()->withErrors('Notificatie niet gevonden');
    }

    public function read($id){
        $user = Auth::user();
        $notification = $user->notifications()->where('id', $id)->first();
        if ($notification)
        {
            $notification->markAsRead();
            return back();
        }
        else
            return back()->withErrors('Notificatie niet gevonden');
    }

}
