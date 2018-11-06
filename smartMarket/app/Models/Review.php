<?php

namespace App;

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
    // One review belong to one product
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}