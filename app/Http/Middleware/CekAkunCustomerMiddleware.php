<?php

namespace App\Http\Middleware;

use Closure;
use App\Customer;

class CekAkunCustomerMiddleware
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
        $akunCustomer = Customer::where('email', $request->email)->first();
        if($akunCustomer->email !== $request->email || $akunCustomer->password !== hash('gost', $request->password)) {
            return redirect('/')->with('gagalLogin', 'Kombinasi email dan password salah');
        }else {
            return $next($request);
        }

    }
}
