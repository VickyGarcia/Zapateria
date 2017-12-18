<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'id_usuario');
    }

    public function promotions()
    {
        return $this->hasMany(Promotion::class,'id_empleado');
    }

    public function sales()
    {
        return $this->hasMany(Sale::class,'id_cliente');
    }

}
