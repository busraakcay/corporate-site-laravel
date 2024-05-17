<?php

namespace App\Http\Middleware;

use App\Models\Config;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            if ($request->segment(1) == 'tr' || $request->segment(1) == 'en') {
                Cache::flush();
                app()->setLocale($request->segment(1));
                URL::defaults(["locale" => $request->segment(1)]);
            }
            return $next($request);
        } catch (\Exception $e) {
            abort(404);
        }
    }
}
