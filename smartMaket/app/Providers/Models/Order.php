<?php

namespace smartMaket;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products()
	{
		return $this->belongsToMany(Products::class);
			//->withPivot('product_name','unit_price', 'quantity', 'promotion_id', 'total_amount');
	}
}
