<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    public function shoelines()
    {
        return $this->hasMany(ShoeLine::class,'id_line');
    }
}
