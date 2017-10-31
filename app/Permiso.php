<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //
     public $table = 'permisos';

    protected $fillable = ['Permiso'
    ];

    public function rol_permiso()
    {
        return $this->hasMany(Rol_Permiso::class, 'id_permiso', 'id');
    }
}
