<?php

namespace App\Http\Middleware;

use App;
use Closure;
use View;

class Localization {
    public function handle($request, Closure $next) {
        $language = $request->segment(1);
        App::setLocale($language);
        View::share('lang', $language);
        return $next($request);
    }
}
