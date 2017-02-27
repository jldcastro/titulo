<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','codigo_usuario','apellido_paterno','apellido_materno','rut_usuario','tipo_usuario'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function scopeBusqueda($query,$dato="")
    {
        $resultado= $query->where('codigo_usuario','like','%'.$dato.'%');

        return  $resultado;
    }

    public function tipo($idtipo)
    {
        $resultado=TipoUsuario::find($idtipo);
        if(isset($resultado)){
            return $resultado->nombre;
        }
        else
        {
            return "sin definir";
        }

    }
}
