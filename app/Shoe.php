<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    public function shoebrands()
    {
        return $this->hasMany(ShoeBrand::class,'id_zapato');
    }

    public function catalogs()
    {
        return $this->hasMany(Catalog::class,'id_zapato');
    }

    public function shoelines()
    {
        return $this->hasMany(ShoeLine::class,'id_zapato');
    }

    public function shoesizes()
    {
        return $this->hasMany(ShoeSize::class,'id_zapato');
    }

    public function colors()
    {
        return $this->hasMany(Color::class,'id_zapato');
    }

    public function images()
    {
        return $this->hasMany(Image::class,'id_zapato');
    }

    public function shoetypes()
    {
        return $this->hasMany(ShoeType::class,'id_zapato');
    }

    public function shoepulleds()
    {
        return $this->hasMany(ShoePulled::class,'id_zapato');
    }

    public function ()
    {
        return $this->hasMany(::class,'id_zapato');
    }
}
