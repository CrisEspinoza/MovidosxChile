<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    //
     protected $table = 'historials';
    //public $timestamps = false;
    
	protected $fillable = [
		'Fecha'
	];

	public function usuario()
    {
    	return $this->belongsTo(User::class, 'id_usuario', 'id');
    }

}
