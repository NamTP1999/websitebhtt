<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdProducts extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ad_products', function (Blueprint $table) {
			$table->bigIncrements('prod_id');
			$table->string('prod_name');
			$table->string('prod_name_slug');
			$table->integer('prod_price');
			$table->string('prod_img');
			$table->string('prod_promotion');
			$table->string('prod_description');
			$table->unsignedBigInteger('prod_cate');
			$table->foreign('prod_cate')->references('cate_id')->on('ad_categories')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('ad_products');
	}
}
