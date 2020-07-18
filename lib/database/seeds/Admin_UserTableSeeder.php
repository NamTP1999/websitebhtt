<?php

use Illuminate\Database\Seeder;

class Admin_UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		$data = [
			[
				'email' => 'namphamt1999@gmail.com',
				'password' => bcrypt('matkhau'),
			]];
		DB::Table('admin_user')->insert($data);
	}
}
