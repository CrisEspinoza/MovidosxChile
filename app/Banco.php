<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $table = 'bancos';

    protected &fillable= [
      'Nombre_Banco'
    ];

    public function donacion(){

      return $this->hasmany(Donacion:: class,'Id_Banco', 'id' );
    }

    public function setNombre($n)
    {
        $this-> Nombre_Banco = $n;
    }


}
