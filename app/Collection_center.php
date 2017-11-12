<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection_center extends Model
{
    protected $table = 'collection_center';
    
	protected $fillable = [
		'name'
	];

	public function action()
    {
    	return $this->morphMany(Medida::class, 'actionOP');
    }

    public function assets(){
         return $this->hasMany(Asset::class, 'id_centroAcopio');
    }
}