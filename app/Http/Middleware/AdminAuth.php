<?php

namespace App\Http\Middleware;

use Closure;
use Auth ;

class AdminAuth
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
       
        // If returned true is meaning this uesr is not logged in
        if(Auth::guard('admins')->guest())  
        {
            return redirect()->to(Url('/').'/admin/login') ;
        }
        
        //return dd(Auth::guard('admins')->check()) ;
        return $next($request);
    }
}
