<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Model\ad_product;

class TrangchuController extends Controller {
	public function getTrangchu() {
		$data['listprod'] = ad_product::where('prod_cate', 1)->orderBy('prod_cate', 'desc')->take(4)->get();
		$data['listprod2'] = ad_product::where('prod_cate', 2)->orderBy('prod_cate', 'desc')->take(4)->get();
		return view('frontend.trangchu', $data);
	}
}
