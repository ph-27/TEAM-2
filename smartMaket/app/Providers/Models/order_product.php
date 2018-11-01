<?php

namespace smartMaket;

use Illuminate\Database\Eloquent\Model;

class order_product extends Model
{
    public function order()
    {
    return $this->hasMany('smartMaket/Orders','order_id','id');
    }
}
