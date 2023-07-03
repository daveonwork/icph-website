<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class CheckPrivacyPolicyAgreement
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $switch)
    {
        if($switch === 'enabled'){
            if($request->hasCookie('privacy-policy-agree')) {
                Session::put('has-agreed', true);
                return $next($request);    
            }
            else{
                Session::put('has-agreed', false);
                return $next($request);
            }
        }
        else if($switch === 'disabled'){
            if( Session::has('has-agreed') ){
                Session::forget('has-agreed');
            }
            return $next($request);
        }
    }
}
