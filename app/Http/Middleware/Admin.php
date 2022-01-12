<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()){
            if (auth()->user()->type == 1) {
                return $next($request);
            }
            return redirect()->route('admin.auth.login.view')->with('global-info', 'Allow only admin account');
        }
        return redirect()->route('admin.auth.login.view');
    }
}
