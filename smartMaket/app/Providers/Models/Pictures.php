<?php

namespace smartMaket;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    public function products()
    {
        return $this->belongsTo('smartMaket\products');
    }
}
