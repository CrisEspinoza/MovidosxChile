<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $table = 'bancos';

    protected $fillable= [
      'Nombre_Bien', 
      'Tipo_Bien'
    ];

    public function bien_centroAcopio(){
    	 return $this->hasMany(Bien_CentroAcopio::class, 'id_bien', 'id');
    }


}
