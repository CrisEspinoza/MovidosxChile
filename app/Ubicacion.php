<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //
	protected $table = 'ubicacions';

    protected $fillable = [
    'Calle',
    'Comuna',
    'Ciudad'
    ];

    public function catastrofe()
    {
        return $this->hasMany(Catastrofe::class, 'id_catastrofe', 'id');
    }
    
}
