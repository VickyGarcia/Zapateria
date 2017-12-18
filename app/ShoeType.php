<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoeType extends Model
{
    public function shoe()
    {
        return $this->belongsTo(Shoe::class,'id_zapato');
    }

    public function type()
    {
        return $this->belongsTo(Type::class,'id_tipo');
    }
}
