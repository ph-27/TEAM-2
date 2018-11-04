<?php

namespace smartMaket;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    public function products()
    {
        return $this->hasMany('smartMaket\Products','product_id','id');
    }
}
