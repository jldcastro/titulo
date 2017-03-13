<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidades';

    public function calibracion()
    {
        return $this->hasMany('App\Calibracion');
    }
}
