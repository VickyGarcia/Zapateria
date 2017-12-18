<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class,'id_cliente');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class,'id_empleado');
    }

    public function shoesale()
    {
        return $this->hasMany(ShoeSale::class,'id_venta');
    }

    public function salepulleds()
    {
        return $this->hasMany(SalePulled::class,'id_venta');
    }
}
