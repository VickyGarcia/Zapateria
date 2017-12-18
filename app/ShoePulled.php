<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoePulled extends Model
{
    public function shoe()
    {
        return $this->belongsTo(Shoe::class,'id_zapato');
    }

    public function pulledapart()
    {
        return $this->belongsTo(PulledApart::class,'id_apartado');
    }
}
