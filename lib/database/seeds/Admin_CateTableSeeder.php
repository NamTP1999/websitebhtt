<?php

use Illuminate\Database\Seeder;

class Admin_CateTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$data = [
			[
				'cate_name' => 'Áo',
				'cate_name_slug' => 'Ao',
			],
			[
				'cate_name' => 'Quần',
				'cate_name_slug' => 'Quan',
			],

		];
		DB::table('ad_categories')->insert($data);
	}
}
