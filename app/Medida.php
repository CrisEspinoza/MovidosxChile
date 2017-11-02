<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    //
    protected $table = 'medidas';
    //public $timestamps = false;
    
	protected $fillable = [
		'id_usuario',
		'id_catastrofe',
		'Estado',
		'Avance',
		'Fecha_Inicio',
		'Fecha_Termino'

	];
    public function medidaOP()
    {
    	return $this->morphTo();
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id');
    }






}
