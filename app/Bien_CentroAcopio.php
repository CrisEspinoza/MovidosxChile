<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien_CentroAcopio extends Model
{
    //
    protected $table= 'centroAcopio_bien';

    protected $fillable = [
       	'id_bien',
        'id_centroAcopio'

    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'id_bien', 'id');
    }
    public function centroAcopio()
    {
        return $this->belongsTo(CentroAcopio::class, 'id_centroAcopio', 'id');
    }
}
