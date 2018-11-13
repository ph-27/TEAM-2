<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
    	'product_name',
    	'picture',
        'unit_price',
        'imported_date',
        'expired_date',
        'origin',
        'imp_quantity',
        'description',
        'in_stock',
        'type',
        'slug',
    ];

    public function category()
    {
    	// return $this->belongsTo('App\Category','category_id', 'id');
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)
        ->withPivot('product_name', 'unit_price', 'quantity', 'promotion_id', 'total_amount');
    }

    public function promotion()
    {
    	return $this->belongsTo(Promotion::class, 'promotion_id', 'id');
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
