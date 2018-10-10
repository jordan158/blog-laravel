<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
      //session(['admin'=>null]);

        if(session('admin')){
            echo 'admin的session值为'.session('admin');
        }else{
           return redirect('admin_test1/login');
        }
        return $next($request);
    }
}
