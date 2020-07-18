<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ad_product extends Model {
	protected $table = 'ad_products';
	protected $primaryKey = 'prod_id';
	protected $guarded = [];
}
