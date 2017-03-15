<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiales';

    public function calibracion()
    {
        return $this->hasMany('App\Calibracion');
    }
}
