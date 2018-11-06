<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Product;

class Order extends Model
{
	protected $fillable = [
		'user_id',
		'name',
		'address',
		'phone',
		'ship_fee',
		'discount',
		'pay_method',
		'status',
		'unit_price',
		'total_amount',
	];
	public function products()
	{
		return $this->belongsToMany(Product::class)
			->withPivot('product_name','unit_price', 'quantity', 'promotion_id', 'total_amount');
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
