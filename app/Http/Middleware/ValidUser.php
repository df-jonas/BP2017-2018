<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ValidUser
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check())
            return Redirect::to('login');

        if (!Auth::user()->isValid())
            return Redirect::to('register');

        return $next($request);
    }
}
