<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'id_usuario');
    }

    public function pulledaparts()
    {
        return $this->hasMany(PulledApart::class,'id_cliente');
    }

    public function sales()
    {
        return $this->hasMany(Sale::class,'id_cliente');
    }

}
