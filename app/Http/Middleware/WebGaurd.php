<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class WebGaurd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)//this function handles the coming request 
    {
        // // echo"hello vndana{";
        // if($request->age<50)
        // {
        //     echo"not allowed";
        //     die;
        // }
        return $next($request);
    }
}
