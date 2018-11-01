<?php

namespace smartMaket;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function products()
    {
        return $this->belongsToMany('smartMaket\Products');
    }
}
