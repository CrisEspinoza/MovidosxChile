<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol_Permiso extends Model
{
   protected $table= 'rol_permiso';

    protected $fillable = [
       	'id_rol',
        'id_permiso'
  
    ];

     public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol', 'id');
    }
    public function permiso()
    {
        return $this->belongsTo(Permiso::class, 'id_permiso', 'id');
    }
}
