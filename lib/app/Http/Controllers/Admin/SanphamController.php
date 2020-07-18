<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuaSPRequest;
use App\Http\Requests\ThemSPRequest;
use App\Model\ad_categories;
use App\Model\ad_product;

class SanphamController extends Controller {

	public function getHienthiSP() {
		$data['listprod'] = ad_product::all();
		return view('backend.hienthisp', $data);
	}

	public function getThemSP() {
		$data['listcate'] = ad_categories::all();
		return view('backend.themsp', $data);
	}

	public function postThemSP(ThemSPRequest $request) {
		$filename = $request->img->getClientOriginalName();
		$data = new ad_product;
		$data->prod_name = $request->name;
		$data->prod_name_slug = str_slug($request->name);
		$data->prod_price = $request->price;
		$data->prod_img = $filename;
		$data->prod_promotion = $request->promotion;
		$data->prod_description = $request->description;
		$data->prod_cate = $request->cate;
		$data->save();
		$request->img->storeAs('avatar', $filename);
		return back();

	}

	public function getSuaSP($id) {
		$data['product'] = ad_product::find($id);
		$data['listcate'] = ad_categories::all();
		return view('backend.suasp', $data);
	}

	public function postSuaSP(SuaSPRequest $request, $id) {
		$data = ad_product::find($id);
		$data->prod_name = $request->name;
		$data->prod_name_slug = str_slug($request->name);
		$data->prod_price = $request->price;
		if ($request->hasFile('img')) {
			$filename = $request->img->getClientOriginalName();
			$data->prod_img = $filename;
			$request->img->storeAs('avatar' . $filename);
		}
		$data->prod_promotion = $request->promotion;
		$data->prod_description = $request->description;
		$data->prod_cate = $request->cate;
		$data->save();
		return redirect()->intended('admin/sanpham/');
	}

	public function getXoaSP($id) {
		ad_product::destroy($id);
		return back();
	}
}
