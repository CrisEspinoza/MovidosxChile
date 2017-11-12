<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function catastrophes()
    {
        return $this->hasMany(Catastrophe::class, 'catastrophe_id', 'id');
    }
	public function events()
    {
        return $this->hasMany(Event::class, 'event_id', 'id');
    }
    public function commune()
      {
          return $this->belongsTo(Commune::class, 'commune_id', 'id');
      }

}
