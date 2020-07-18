<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\ad_product;
use App\Model\comments;

class SanphamController extends Controller {
	public function getChitietsp($id) {
		$data['product'] = ad_product::find($id);
		$data['comments'] = comments::where('com_product', $id)->get()->take(6);
		return view('Frontend.chitietsp', $data);
	}
}
