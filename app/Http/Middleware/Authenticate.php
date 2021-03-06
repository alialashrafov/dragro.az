<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
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
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect('/az/login');
            }
        }

        if ($request->segment(2) == 'dragro' && Auth::user()->type == 'Employee' ){
            return $next($request);
        } elseif ($request->segment(2) == 'farmer' && Auth::user()->type == 'Farmer' ){
            return $next($request);
        }else{
            return redirect('/az/login');
        }
    }
}
