<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    public function nombre()
    {
        return $this->hasOne('App\Nombre','id','idNombre');
    }

    public function marca()
    {
        return $this->hasOne('App\Marca','id','idMarca');
    }

    public function ubicacion()
    {
        return $this->hasOne('App\Ubicacion','id','idUbicacion');
    }

    public function actividad()
    {
        return $this->hasOne('App\Actividad','id','idActividad');
    }

    public function scopeBusqueda($query,$dato="")
    {
        return $query->whereIn('idNombre',function($q) use($dato){
            $q->select('id')->from('nombres')->where('equipo','like',"%{$dato}%")->get();

       });
    }
}