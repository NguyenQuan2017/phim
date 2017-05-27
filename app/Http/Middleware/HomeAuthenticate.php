<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class HomeAuthenticate
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
        if(Auth::check()){
            $user=Auth::user();
            if($user->level=0){
            return $next($request);
            }
            else
            {
            return redirect('/')->with('thongbao','dang nhap that bai');

            }
        }
        else{
            return redirect('/')->with('thongbao','dang nhap that bai');
            
        }
    }
    
}
