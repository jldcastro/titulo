<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function scopeBusqueda($query,$dato="")
    {
        $resultado= $query->where('nombre','like','%'.$dato.'%');

        return  $resultado;
    }
}
