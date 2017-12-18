<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function shoetypes()
    {
        return $this->hasMany(ShoeType::class,'id_tipo');
    }
}
