<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //

    protected $table = 'eventos';
    //public $timestamps = false;

	protected $fillable = [
		'id_ubicacion',
		'id_medida'
		'Nombre_Evento',
		'Actividades',
		'Alimentos'

	];

	public function medidas()
    {
    	return $this->morphMany(Medida::class, 'medidaOP');
    }

    public function ubicacion()   //relación con banco
	{
        return $this->belongsTo(Ubicacion::class, 'id_ubicacion', 'id');
    }
}
