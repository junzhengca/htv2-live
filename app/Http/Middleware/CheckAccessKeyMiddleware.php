<?php

namespace App\Http\Middleware;

use Closure;

use App\AccessKey;

class CheckAccessKeyMiddleware
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
        $tokenBody = $request->header('Authorization');
        $key = AccessKey::where('key_body', $tokenBody)->first();
        if($key){
            return $next($request);
        }
        return response([
            'status' => 'unauthorized'
        ], 401);
    }
}
