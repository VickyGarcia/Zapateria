<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoeLine extends Model
{
    public function shoe()
    {
        return $this->belongsTo(Shoe::class,'id_zapato');
    }

    public function line()
    {
        return $this->belongsTo(Line::class,'id_linea');
    }
}
