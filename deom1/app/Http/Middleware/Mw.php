<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Mw
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
        if($request->age <18){
            echo "you are not eligible";
            die;
        }
        echo "heloo";
        return $next($request);
    }
}
