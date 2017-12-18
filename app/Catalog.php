<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    public function season()
    {
        return $this->belongsTo(Season::class,'id_temporada');
    }

    public function shoe()
    {
        return $this->belongsTo(Shoe::class,'id_zapato');
    }

}
