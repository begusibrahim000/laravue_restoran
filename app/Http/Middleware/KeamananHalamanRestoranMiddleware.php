<?php

namespace App\Http\Middleware;

use Closure;

class KeamananHalamanRestoranMiddleware
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
        if(!session()->get('akunCustomer')) {
            return redirect('/')->with('belumLogin', 'Maaf anda harus login dulu :)');
        }else {
            return $next($request);
        }
    }
}
