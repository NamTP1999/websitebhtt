<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuaDMRequest;
use App\Http\Requests\ThemDMRequest;
use App\Model\ad_categories;

class DanhmucController extends Controller {
	public function getDanhmuc() {
		$data['listcate'] = ad_categories::all();
		return view('backend.danhmuc', $data);
	}

	public function postDanhmuc(ThemDMRequest $request) {
		$danhmuc = new ad_categories;
		$danhmuc->cate_name = $request->name;
		$danhmuc->cate_name_slug = str_slug($request->name);
		$danhmuc->save();
		return back();
	}

	public function getSuaDM($id) {
		$data['cate'] = ad_categories::find($id);
		return view('backend.suadm', $data);
	}

	public function postSuaDM(SuaDMRequest $request, $id) {
		$danhmuc = ad_categories::find($id);
		$danhmuc->cate_name = $request->name;
		$danhmuc->cate_name_slug = str_slug($request->name);
		$danhmuc->save();
		return redirect()->intended('admin/danhmuc/');
	}

	public function getXoaDM($id) {
		ad_categories::destroy($id);
		return back();
	}
}
