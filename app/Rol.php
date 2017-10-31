<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    public $table = 'rols';

    protected $fillable = ['Tipo_Rol'
    ];

    public function usuario(){

    	return $this->hasMany(Usuario::class, 'id_rol','id');
    }

    public function rol_permiso()
    {
        return $this->hasMany(Rol_Permiso::class, 'id_rol', 'id');
    }
}
