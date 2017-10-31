<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $fillable = [
    'id_rol',
    'Nombres',
    'Apellidos',
    'password',
    'Rut'
    ];

    public function historial()
    {
        return $this->hasMany(Historial::class, 'id_usuario', 'id');
    }

    public function medidas()
    {
        return $this->hasMany(Medidas::class, 'id_usuario', 'id');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_usuario', 'id');
    }

    public function catastrofes()
    {
       return $this->hasMany(Catastrofe::class, 'id_usuario', 'id');
    }


}
