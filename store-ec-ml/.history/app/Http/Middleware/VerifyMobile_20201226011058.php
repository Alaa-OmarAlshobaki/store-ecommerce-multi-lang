<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::guard('auth::web')->check()){
            if(Auth::user()->email_verified_at == null){
                return redirect(RouteServiceProvider::VERIFY);
            }

        }
        return $next($request);
    }
}
