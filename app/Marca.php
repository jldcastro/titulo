<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    public function calibracion()
    {
        return $this->hasMany('App\Calibracion');
    }
}
