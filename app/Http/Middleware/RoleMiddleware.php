<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next,$role)
    {
        $username = Auth::user()->username;
        if(strpos($role,$username)===false){
            $request->session()->flash('msg',"Bạn không có quyền truy cập vào chức năng này");
            return redirect('/404');
        }
        return $next($request);
    }
}
