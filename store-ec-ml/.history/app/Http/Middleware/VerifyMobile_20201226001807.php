<?php

namespace App\Http\Middleware;

use Closure;
use App\Providers\RouteServiceProvider;

class VerifyMobile
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
        if(Auth::guard('web')->check()){
            if(Auth::user()->email_verified_at == null){
                return redirect(RouteServiceProvider::VERIFY);
            }

        }
        return $next($request);
    }
}
