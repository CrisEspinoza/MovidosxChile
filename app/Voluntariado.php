<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntariado extends Model
{
    //
     protected $table = 'voluntariados';
    //public $timestamps = false;
    
	protected $fillable = [
		'Tipo_Trabajo',
		'Perfil_Voluntario'
		'Cantidad_Minima_Voluntarios',
		'Cantidad_Maxima_Voluntarios',
		

	];

	public function medidas()
    {
    	return $this->morphMany(Medida::class, 'medidaOP');
    }

}
