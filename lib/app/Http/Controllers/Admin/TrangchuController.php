<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\ad_categories;
use App\Model\ad_product;
use App\Model\fend_users;
use Auth;

class TrangchuController extends Controller {
	public function getTrangchu() {
		$data['T_Cate'] = ad_categories::count();
		$data['T_Product'] = ad_product::count();
		$data['T_User'] = fend_users::count();
		return view('backend.trangchu', $data);
	}

	public function getLogout() {
		Auth::logout();
		return redirect()->intended('dangnhap');
	}
}
