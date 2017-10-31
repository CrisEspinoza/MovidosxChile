<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medida_Voluntario extends Model
{
    //
    protected $table= 'voluntario_medida';

    protected $fillable = [
       	'id_voluntario',
        'id_medida'
  
    ];

    public function voluntario()
    {
        return $this->belongsTo(Voluntario::class, 'id_voluntario', 'id');
    }
    public function medida()
    {
        return $this->belongsTo(Medida::class, 'id_medida', 'id');
    }


}
