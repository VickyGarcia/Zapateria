<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PulledApart extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class,'id_cliente');
    }

    public function shoepulleds()
    {
        return $this->hasMany(ShoePulled::class,'id_apartado');
    }

    public function salepulleds()
    {
        return $this->hasMany(SalePulled::class,'id_apartado');
    }
}
