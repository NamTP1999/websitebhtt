<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\model\ad_product;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GiohangController extends Controller {
	public function getThem($id) {
		//lấy sản phẩm có id này trong model
		$product = ad_product::find($id);
		Cart::add(array(
			'id' => $id,
			'name' => $product->prod_name,
			'price' => $product->prod_price,
			'quantity' => 1,
			'attributes' => array(
				'img' => $product->prod_img,
			),
		));
		return redirect('fend/giohang/hienthi');

	}

	public function getHienThi() {
		$data['items'] = Cart::getContent();
		$data['total'] = Cart::getTotal();
		return view('frontend/giohang', $data);
	}

	public function getXoa($id) {
		if ($id == 'all') {
			Cart::clear();
		} else {
			Cart::remove($id);
		}

		return back();
	}

	public function getCapnhat(Request $request) {
		Cart::update($request->id, array(
			'quantity' => array(
				'relative' => false,
				'value' => $request->quantity,
			),
		));
	}

	public function postThanhtoan(Request $request) {
		$data['info'] = $request->all();
		$email = $request->email;
		$name = $request->name;
		$data['total'] = Cart::getTotal();
		$data['items'] = Cart::getContent();
		Mail::send('frontend.email', $data, function ($message) use ($email) {
			$message->from('namphamt1999@gmail.com', 'Nam PT');

			$message->to($email, $email); //gửi gmail tới khách hàng

			$message->cc('namhax8@gmail.com', 'Nam PT'); //gửi tới  chủ shop

			$message->subject('Thông tin đơn hàng đã mua.'); //tiêu đề
		});
		return redirect('fend/giohang/hoanthanh');
	}

	public function getHoanthanh() {
		return view('frontend.hoanthanh');
	}
}
