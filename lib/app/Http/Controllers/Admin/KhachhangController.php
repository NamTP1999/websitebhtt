<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\fend_users;

class KhachhangController extends Controller {
	public function getHienthiKH() {
		$data['listuser'] = fend_users::all();
		return view('backend.khachhang', $data);
	}

	public function getXoaKH($id) {
		fend_users::destroy($id);
		return back();
	}
}
