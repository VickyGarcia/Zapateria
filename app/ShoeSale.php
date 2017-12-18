<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoeSale extends Model
{
    public function shoe()
    {
        return $this->belongsTo(Shoe::class,'id_zapato');
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class,'id_venta');
    }
}
