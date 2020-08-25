<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuth
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
        if (\Auth::check() && strstr($request->route()->getPrefix(),"user-dashboard") == 'user-dashboard') {
            if (\Auth::user()->status <= 1) {
                if ($request->route()->getName() == 'verification.index' or $request->route()->getName() == 'verification.sms' or $request->route()->getName() == 'logout') {
                    return $next($request);
                }
                else {
                    return redirect()->route('verification.index');
                }
            }
             else {
                return $next($request);
            }
        }
        else {
            return $next($request);
        }
    }
   }

