<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckLoginFend {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		//kiểm tra xem login đã đăng nhập hay chưa
		if (Session::has('TenTK')) {
			//cho vào (rồi)
			return $next($request);
		} else {
			//chuyển sang đăng nhập (chưa)
			return redirect('fend/dangnhap/');
		}
	}
}
