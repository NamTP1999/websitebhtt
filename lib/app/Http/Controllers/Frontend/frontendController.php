<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\ad_categories;
use App\Model\ad_product;
use App\Model\comments;
use Illuminate\Http\Request;
use Session;

class frontendController extends Controller {

	public function getDanhmuc($id) {
		$data['listprod'] = ad_product::where('prod_cate', $id)->orderBy('prod_id', 'desc')->take(8)->get();
		$data['cate'] = ad_categories::find($id);
		return view('frontend.danhmuc', $data);

	}

	public function getHoanthanh() {
		return view('frontend.hoanthanh');
	}

	public function getDangxuat() {
		Session::flush();
		return back();
	}

	public function postBinhLuan(Request $request, $id) {
		$comments = new comments();
		$comments->com_name = Session::get('TenTK');
		$comments->com_content = $request->content;
		$comments->com_product = $id;
		$comments->save();
		return back();
	}
}
