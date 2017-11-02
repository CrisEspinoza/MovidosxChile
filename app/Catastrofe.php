<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrofe extends Model
{
    public $table = 'catastroves';

    protected $fillable = [
 			      'id_usuario',
            'Tipo_Catastrofe',
            'id_ubicacion'

    ];

    public function medida(){
    	return $this->hasMany(Medida::class,'id_catastrofe','id');
    }

    public function usario(){
    	return $this->belongsTo(Usuario::class'id_usuario','id');
    }

    public function ubicacion(){
    	return $this->belongsTo(Ubicacion::class, 'id_ubicacion','id');
    }



}
