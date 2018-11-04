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
    public function category(){
    	// return $this->belongsTo('App\Category','category_id', 'id');
        return $this->belongsTo(Category::class);
    }
     public function orders(){
    	return $this->belongsToMany(Order::class);
	}
	public function promotion(){
    	return $this -> belongsTo(Promotion::class,'promotion_id','id');
    }
    public function review(){
    	return $this -> belongsTo(Review::class,'review_id','id');
    }
 
}
