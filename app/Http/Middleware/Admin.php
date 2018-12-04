<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        if(Auth::check() && Auth::user()->role == 'admin'){
            return $next($request);
        }elseif(Auth::check() && Auth::user()->role == 'donator'){
            return redirect('/donator');
        }elseif(Auth::check() && Auth::user()->role == 'donee'){
            return redirect('/donee');
        }else{
            return redirect('');
        }

        return $next($request);
    }
}
