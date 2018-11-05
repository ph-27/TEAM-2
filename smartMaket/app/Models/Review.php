<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'date_review',
        'rank',
        'detail'
    ];

    public function products()
    {
    	return $this->hasMany(Product::class);
	}
}
