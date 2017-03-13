<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    protected $table = 'condiciones';

    public function calibracion()
    {
        return $this->hasMany('App\Calibracion');
    }
}
