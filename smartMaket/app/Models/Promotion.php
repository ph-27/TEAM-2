<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
        'name',
        'date_start',
        'date_end',
        'promo_value'
    ];

    public function products()
    {
    	return $this->hasMany(Product::class,'product_id','id');
	}
}
