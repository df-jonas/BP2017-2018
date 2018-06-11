<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 22/12/2017
 * Time: 15:57
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return Redirect::to(route('website-index'));
    }
}