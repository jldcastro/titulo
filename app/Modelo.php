<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = 'modelos';

    public function calibracion()
    {
        return $this->hasMany('App\Calibracion');
    }

    public function marca()
    {
        return $this->hasOne('App\Marca','id','idMarca');
    }
}
