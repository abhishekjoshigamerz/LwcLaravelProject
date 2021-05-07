<?php

namespace App\Http\Middleware;

use Closure;

class VerifyLogin
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
        if($request->session()->has('USERID')){
            return $next($request);
        }else {
            return redirect('adminpanelroute/login');
        }
        
    }
}
