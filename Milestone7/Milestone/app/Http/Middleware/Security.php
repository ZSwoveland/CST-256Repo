<?php

namespace App\Http\Middleware;

use Closure;
require_once ('Controllers/LoginHelp.php');

class Security
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /*public function handle($request, Closure $next)
    {

        if($request == false){
            return view('Login');
        }
        return $next($request);
    }*/
}
