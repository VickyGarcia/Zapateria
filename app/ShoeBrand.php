<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoeBrand extends Model
{
    public function shoe()
    {
        return $this->belongsTo(Shoe::class,'id_zapato');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'id_marca');
    }
}
