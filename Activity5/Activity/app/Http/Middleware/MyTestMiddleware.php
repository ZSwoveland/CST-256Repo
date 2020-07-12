<?php

namespace App\Http\Middleware;

use Closure;

class MyTestMiddleware
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
       // Log::info("Test middleware");
        return $next($request);
    }
}
