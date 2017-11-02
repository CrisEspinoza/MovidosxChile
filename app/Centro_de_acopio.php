<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro_de_acopio extends Model
{
    //
    protected $table = 'centro_de_acopios';
    //public $timestamps = false;

	protected $fillable = [
		'Nombre_Centro_Acopio'

	];

	public function medidas()
    {
    	return $this->morphMany(Medida::class, 'medidaOP');
    }

    public function bien_centroAcopio(){
         return $this->hasMany(Bien_CentroAcopio::class, 'id_centroAcopio', 'id');
    }
}
