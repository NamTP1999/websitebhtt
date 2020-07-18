<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	return view('welcome');
});

Route::group(['namespace' => 'Admin'], function () {
	Route::group(['prefix' => 'dangnhap', 'middleware' => 'CheckLogin'], function () {
		Route::get('/', 'LoginController@getLogin');
		Route::post('/', 'LoginController@postLogin')->name('postLogin');
	});

	Route::get('logout', 'TrangchuController@getLogout');

	Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogout'], function () {
		Route::get('trangchu', 'TrangchuController@getTrangchu');

		Route::group(['prefix' => 'sanpham'], function () {
			Route::get('/', 'SanphamController@getHienthiSP');

			Route::get('themsp', 'SanphamController@getThemSP');
			Route::post('themsp', 'SanphamController@postThemSP')->name('postThemSP');

			Route::get('suasp/{id}', 'SanphamController@getSuaSP');
			Route::post('suasp/{id}', 'SanphamController@postSuaSP')->name('postSuaSP');

			Route::get('xoasp/{id}', 'SanphamController@getXoaSP');

		});

		Route::group(['prefix' => 'danhmuc'], function () {
			Route::get('/', 'DanhmucController@getDanhmuc');
			Route::post('/', 'DanhmucController@postDanhmuc')->name('postDanhmuc');

			Route::get('suadm/{id}', 'DanhmucController@getSuaDM');
			Route::post('suadm/{id}', 'DanhmucController@postSuaDM')->name('postSuaDM');

			Route::get('xoadm/{id}', 'DanhmucController@getXoaDM');
		});

		Route::group(['prefix' => 'donhang'], function () {
			Route::get('hangdat', 'DonhangController@getHangdat');

			Route::get('hanghuy', 'DonhangController@getHanghuy');

		});

		Route::group(['prefix' => 'khachhang'], function () {
			Route::get('/', 'KhachhangController@getHienthiKH');

			Route::get('xoakh/{id}', 'KhachhangController@getXoaKH');
		});

	});
});

Route::group(['namespace' => 'Frontend'], function () {
	Route::group(['prefix' => 'fend'], function () {
		Route::group(['prefix' => 'dangky'], function () {
			Route::get('/', 'DangkyController@getDangky');
			Route::post('/', 'DangkyController@postDangky')->name('postDangky');
		});

		Route::group(['prefix' => 'dangnhap'], function () {
			Route::get('/', 'DangnhapController@getDangnhap');
			Route::post('/', 'DangnhapController@postDangnhap')->name('postDangnhap');
		});

		Route::get('dangxuat', 'frontendController@getDangxuat');
		Route::group(['prefix' => 'giohang', 'middleware' => 'CheckLoginFend'], function () {
			Route::get('hienthi', 'GiohangController@getHienThi');
			Route::get('them/{id}', 'GiohangController@getThem');
			Route::get('xoa/{id}', 'GiohangController@getXoa');
			Route::get('capnhat', 'GiohangController@getCapnhat');
			Route::post('thanhtoan', 'GiohangController@postThanhtoan')->name('postThanhtoan');
			Route::get('hoanthanh', 'GiohangController@getHoanthanh');
		});

		Route::get('trangchu', 'TrangchuController@getTrangchu');

		Route::get('timkiem', 'TimkiemController@getTimkiem');

		Route::get('chitietsp/{id}', 'SanphamController@getChitietsp')->middleware('CheckLoginFend');
		Route::post('binhluan/{id}', 'frontendController@postBinhLuan')->name('postBinhluan');

		Route::get('danhmuc/{id}', 'frontendController@getDanhmuc');

		Route::get('hoanthanh', 'frontendController@getHoanthanh');
	});
});
