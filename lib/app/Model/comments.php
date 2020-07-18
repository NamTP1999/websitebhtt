<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class comments extends Model {
	protected $table = 'comment';
	protected $primaryKey = 'com_id';
	protected $guarded = [];
}
