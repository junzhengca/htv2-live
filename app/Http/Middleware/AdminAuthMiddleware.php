<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->input('key') && $request->input('key') == env('ADMIN_KEY')){
            return $next($request);
        } else {
            return response("401 :(", 401);
        }
    }
}
