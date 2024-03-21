<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if ($request->header('ss-token') && $request->header('ss-key')) {
        //     if ($request->header('ss-token') != env('ACCESS_TOKEN') && $request->header('ss-key') != 'ACCESS_KEY') {
        //         abort(403);
        //     }
        // } else {
        //     abort(403, 'Access Token or Key is not specified!');
        // }

        return $next($request);
    }
}
