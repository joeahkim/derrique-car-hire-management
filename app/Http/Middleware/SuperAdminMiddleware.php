<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SuperAdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'super-admin') {
            return $next($request);
        }

        return redirect()->route('super-admin.login-form')->withErrors(['error' => 'Unauthorized.']);
    }
}
