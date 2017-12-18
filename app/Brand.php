<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function shoebrans()
    {
        return $this->hasMany(ShoeBrand::class,'id_marca');
    }
}
