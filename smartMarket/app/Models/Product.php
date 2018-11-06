<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name',
    	'category_id',
        'unit_price',
        'imp_date',
        'exp_date',
        'origin',
        'ipm_quantity',
        'description',
        'in_stock',
        'promotion_id',
        'type',
        
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)
            ->withPivot('product_name','unit_price', 'quantity', 'promotion_id', 'total_amount');
    }
    public function promotion()
    {
    	return $this->belongsTo(Promotion::class, 'promotion_id', 'id');
    }
    // One product have many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

