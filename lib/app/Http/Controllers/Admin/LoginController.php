<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller {
	public function getLogin() {
		return view('backend.dangnhap');
	}

	public function postLogin(Request $request) {
		$arr = ['email' => $request->email, 'password' => $request->pwd];
		if ($request->remember == "remember") {
			$remember = true;
		} else {
			$remember = false;
		}

		if (Auth::attempt($arr, $remember)) {
			return redirect()->intended('admin/trangchu');
		} else {
			return back()->withInput()->with('fail', 'Đăng nhập không thành công ');
		}
	}
}
