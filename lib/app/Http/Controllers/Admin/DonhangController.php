<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DonhangController extends Controller {

	public function getHangdat() {
		return view('backend.hienthidhd');
	}

	public function getHanghuy() {
		return view('backend.hienthidhh');
	}

}
