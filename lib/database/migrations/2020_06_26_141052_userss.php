<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Userss extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('userss', function (Blueprint $table) {
			$table->bigIncrements('u_id');
			$table->string('u_name');
			$table->string('u_address');
			$table->string('u_gmail');
			$table->string('u_phone');
			$table->string('u_username');
			$table->string('u_password');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('userss');
	}
}
