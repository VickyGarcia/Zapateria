<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function shoe()
    {
        return $this->belongsTo(Shoe::class,'id_zapato');
    }
}
