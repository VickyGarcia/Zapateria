<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function catalogs()
    {
        return $this->hasMany(Catalog::class,'id_temp');
    }
}
