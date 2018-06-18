<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role != "admin")
            abort(404, 'U heeft geen toegang tot dit gedeelte van de website.');

        return $next($request);
    }
}
