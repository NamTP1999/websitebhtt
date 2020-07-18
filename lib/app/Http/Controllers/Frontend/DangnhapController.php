<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\fend_users;
use Illuminate\Http\Request;
use Session;

class DangnhapController extends Controller {
	public function getDangnhap() {
		return view('frontend.dangnhap');
	}

	public function postDangnhap(Request $request) {
		//lấy tất cả dữ liệu có trong bảng fend_user
		$users = fend_users::all();
		//Sử dụng vòng for để kiểm tra từng tài khoản có trong bảng có trùng với dữ liệu nhập vào không
		foreach ($users as $user) {
			if ($user->u_username == $request->username) {
				//kiêm tra mật khẩu có đúng hay không
				if ($user->u_password == $request->pwd) {
					//lưu vào Session và chuyển sang trang chủ(đúng)
					Session::put('TenTK', $user->u_username);
					Session::put('Matkhau', $user->u_password);
					Session::put('id', $user->u_id);
					return redirect('fend/trangchu');
				} else {
					//Hiển thị thông báo mật khẩu không đúng
					return back()->withInput()->with('Matkhausai', 'Mật khẩu không chính xác.');
				}

			} else {
				//Hiển thị thông báo tài khoản không tồn tại
				return back()->withInput()->with('Taikhoanktt', 'Tài khoản không tồn tại.');
			}

		}

		// if (fend_users::where('u_username', $request->username)) {
		// 	if (fend_users::where('u_password', $request->pwd)) {
		// 		//lưu thông tin tài khoản vào Session
		// 		//chuyển sang trang chủ
		// 		return back()->withInput()->with('thanhcong', 'Đăng nhập thành công');
		// 	} else {
		// 		return back()->withInput()->with('thatbai', 'Đăng nhập thất bại');
		// 	}

		// } else {
		//
		// }
	}
}
