<?php

namespace App\Providers;

use App\Model\ad_categories;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		$data['listcate'] = ad_categories::all();
		view()->share($data);
	}
}
