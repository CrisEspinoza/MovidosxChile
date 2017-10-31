<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    //
    protected $table = 'voluntarios';

    protected $fillable = [
       	'Nombres_Voluntario',
       	'Apellidos_Voluntario',
        'Edad'
  
    ];

    public function medida_Voluntario()
    {
        return $this->hasMany(Medida_Voluntario::class, 'id_voluntario', 'id');
    }




}
