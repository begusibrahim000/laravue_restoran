<?php

namespace App\Http\Middleware;

use Closure;

class KeamananHalamanLoginMiddleware
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
        if(session()->get('akunCustomer')) {
            return redirect('/restoran')->with('sudahLogin', 'Maaf anda sudah login');
        }else {
            return $next($request);
        }
    }
}
