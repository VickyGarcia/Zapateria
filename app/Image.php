<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function shoe()
    {
        return $this->belongsTo(Shoe::class,'id_zapato');
    }
}
