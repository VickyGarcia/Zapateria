<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalePulled extends Model
{
    public function sale()
    {
        return $this->belongsTo(Sale::class,'id_venta');
    }

    public function pulledapart()
    {
        return $this->belongsTo(PulledApart::class,'id_apartado');
    }
}
