<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Cookie;

class Guest
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
        $urls = [
            url('/')
        ];
        if(!isset($sCheck) &&  !in_array($request->url(), $urls)){
                return $next($request);
        }else{
            return $next($request);
        }
    }
}
