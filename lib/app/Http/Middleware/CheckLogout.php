<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class CheckLogout {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		if (Auth::guest()) {
			return redirect()->intended('dangnhap');
		}
		return $next($request);
	}
}
