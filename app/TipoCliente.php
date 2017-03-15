<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    protected $table = 'tiposcl';


    public function calibracion()
    {
        return $this->hasMany('App\Calibracion');
    }
}
