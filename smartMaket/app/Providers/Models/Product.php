<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        ''
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class)
            ->withPivot('product_name','unit_price', 'quantity', 'promotion_id', 'total_amount');
    }
}
