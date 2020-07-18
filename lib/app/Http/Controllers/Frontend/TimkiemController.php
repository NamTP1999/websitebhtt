<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\ad_product;
use Illuminate\Http\Request;

class TimkiemController extends Controller {
	public function getTimkiem(Request $request) {
		//lấy kết quả tìm kiếm.
		$result = $request->result;
		//lấy từ khóa
		$data['keywork'] = $result;
		//thay đổi khoảng trắng băng %
		$result = str_replace(' ', '%', $result);
		//Trỏ tới model và lấy kết quả
		$data['listprod'] = ad_product::where('prod_name', 'like', '%' . $result . '%')->take(8)->get();
		//trả về
		return view('frontend.timkiem', $data);
	}
}
