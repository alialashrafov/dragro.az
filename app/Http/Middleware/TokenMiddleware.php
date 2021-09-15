<?php

namespace App\Http\Middleware;

use App\App;
use App\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Sentinel;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->header('authorization')) {
            App::$user = User::find(encrypt_decrypt('decrypt', $request->header('authorization')));
            return $next($request);
        }else{
            return response()->json([
                'message'   => 'Daxil olun'
            ]);
        }
    }
}
