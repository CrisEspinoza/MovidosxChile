<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //

    protected $table = 'donacions';
    //public $timestamps = false;
    
	protected $fillable = [
		'id_banco',
		'Monto',
		'Tipo_Donacion',

	];

	public function medidas()
    {
    	return $this->morphMany(Medida::class, 'medidaOP');
    }

	public function banco()   //relación con banco
	{
        return $this->belongsTo(Banco::class, 'id_banco', 'id');
    }
}
