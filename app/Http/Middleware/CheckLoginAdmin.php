<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // giải thích phần function teenlaf handle có tham số là request trong lớp Request 
    //và có Closure tên biến là next để kiểm tra xem cái requesst có được tiếp tục thực thi hay không
    public function handle(Request $request, Closure $next)
    {   
        // echo 'middleware request';
        if(!$this->isLogin()){
            return redirect(route('trangchu'));
        }
        return $next($request);
    }
    public function isLogin(){
        return tru;
    }
}
