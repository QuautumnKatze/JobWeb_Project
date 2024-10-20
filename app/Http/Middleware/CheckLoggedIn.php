<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra xem người dùng có đang đăng nhập không
        if (!$request->session()->get('loggedIn', false)) {
            // Nếu không đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('login');
        }

        return $next($request);
    }
}
