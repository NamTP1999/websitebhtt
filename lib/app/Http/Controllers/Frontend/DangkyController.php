<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\DangkyUserRequest;
use App\Model\fend_users;

class DangkyController extends Controller {
	public function getDangky() {
		return view('frontend.dangky');
	}

	public function postDangky(DangkyUserRequest $request) {
		$data = new fend_users;
		$data->u_name = $request->name;
		$data->u_address = $request->address;
		$data->u_gmail = $request->gmail;
		$data->u_phone = $request->phone;
		$data->u_username = $request->username;
		$data->u_password = $request->password;
		$data->save();
		return back()->withInput()->with('thanhcong', 'Đăng ký thành công');
	}
}
