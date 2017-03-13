<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calibracion extends Model
{
    protected $table='calibraciones';

    public function usuario()
    {
        return $this->hasOne('App\User','id','idUsuario');
    }

    public function estado()
    {
        return $this->hasOne('App\Estado','id','idEstado');
    }

    public function modelo()
    {
        return $this->hasOne('App\Modelo','id','idModelo');
    }

    public function unidad()
    {
        return $this->hasOne('App\Unidad','id','idUnidadC');
    }

    public function numero()
    {
        return $this->hasOne('App\Numero','id','idNumero');
    }
}
