<?php

namespace App\Http\Middleware;

use Closure;

class MySecurityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   /* public function handle($request, Closure $next)
    {
        $path = $request->path();
        MyLogger2::info("Entering My Security Middleware in handle() at path: " . $path);
        $secureCheck = true;
        if ($request->is('/') || $request->is('login3') || $request->is('dologin3') ||  
$request->is('usersrest') || $request->is('usersrest/*') || 
$request->is('loggingservice'))
            { $secureCheck = false;}
        MyLogger2::info($secureCheck ? "Security Middleware in handle().....Needs Security" : "Security Middleware in handle().....No Security Required");
        if($secureCheck)
        {
            MyLogger2::info("Leaving My Security Middleware in handle() doing a redirect back to login");
            return redirect('/login3');
        }

        return $next($request);
    }*/
}
