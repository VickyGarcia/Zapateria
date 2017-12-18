<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoeSize extends Model
{
    public function shoe()
    {
        return $this->belongsTo(Shoe::class,'id_zapato');
    }

    public function size()
    {
        return $this->belongsTo(Size::class,'id_talla');
    }
}
