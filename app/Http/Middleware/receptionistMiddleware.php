<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class receptionistMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::User()->rol == 'receptionist' || Auth::User()->rol == 'admin'){
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
