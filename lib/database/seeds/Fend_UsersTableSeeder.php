<?php

use Illuminate\Database\Seeder;

class Fend_UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$data = [
			[
				'u_name' => 'Phạm Tiến Nam',
				'address' => 'Xóm 7 -Nam anh - Nam đàn - Nghệ An',
				'u_gmail' => 'namphamt1999@gmail.com',
				'u_phone' => '0859399737',
				'u_username' => 'namha123',
				'u_password' => bcrypt('matkhau'),
			], [

				'u_name' => 'Nguyễn Văn A',
				'address' => 'Xóm 7 -Nam anh - Nam đàn - Nghệ An',
				'u_gmail' => 'namphamA@gmail.com',
				'u_phone' => '0859399737',
				'u_username' => 'nguyenvana',
				'u_password' => bcrypt('matkhau'),
			],
		];
		DB::table('userss')->insert($data);
	}
}
