<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';
    protected  $fillable = ['nombre','fec_inicio','fec_vencimiento','desc','id_empleado'];
    protected  $guarded = ['id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class,'id_empleado');
    }
}
