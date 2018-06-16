<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
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
        if(Auth::check()) {
            $currentUser = Auth::user();
            if(!$currentUser){
                return redirect('/view/login')->with('flash_message', 'Bạn không được phép vào trang Quản trị');
            }
            return $next($request);
        }
        return redirect('/view/login')->with('flash_message', 'Bạn phải đăng nhập trước khi vào trang Quản trị');
    }
}
