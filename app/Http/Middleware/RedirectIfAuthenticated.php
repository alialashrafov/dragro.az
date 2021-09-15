<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->check()) {
            if(Auth::user()->type == 'Employee')
            {
                return redirect(app()->getLocale().'/dragro/blog');
            }
                return redirect(app()->getLocale().'/farmer/profile');
        }
        return $next($request);
    }
}
