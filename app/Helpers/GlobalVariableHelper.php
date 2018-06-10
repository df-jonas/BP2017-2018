<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 22/04/2018
 * Time: 18:07
 */

namespace App\Helpers;

use App\Tutee;
use App\Tutor;
use App\TutoringSession;
use Illuminate\Support\Facades\Auth;

class GlobalVariableHelper
{
    public static function tutoringCount()
    {
        $owned_tutee = Tutee::query()
            ->where('user_id', '=', Auth::id())
            ->get(['id']);

        $owned_tutor = Tutor::query()
            ->where('user_id', '=', Auth::id())
            ->get(['id']);

        $sessions = TutoringSession::query()
            ->whereIn('tutor_id', $owned_tutor)
            ->where('active', '=', true)
            ->orWhereIn('tutee_id', $owned_tutee)
            ->where('active', '=', true)
            ->get();

        return $sessions->count();
    }

    public static function isCurrentTheme($actual)
    {
        return Auth::user()->preference->theme == $actual;
    }

    public static function theme($actual)
    {
        return self::isCurrentTheme($actual) ? "current" : "disabled";
    }

    public static function isNotificationTypeActive($type)
    {
        return Auth::user()->preference[$type];
    }

    public static function notif($key)
    {
        return self::isNotificationTypeActive($key) ? "active" : "disabled";
    }

}