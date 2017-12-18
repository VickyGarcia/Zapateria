<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function shoesizes()
    {
        return $this->hasMany(ShoeSize::class,'id_talla');
    }
}
