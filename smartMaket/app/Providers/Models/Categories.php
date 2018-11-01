<?php

namespace smartMaket;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function product()
    {
        return $this->hasMany('smartMaket\Products');
    }
}
