<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaDMRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'name' => 'unique:ad_categories,cate_name,' . $this->segment(5) . ',cate_name',
		];
	}
	public function messages() {
		return [
			'name.unique' => 'Tên danh mục không được trùng lặp !',
		];
	}
}
