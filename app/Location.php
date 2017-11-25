<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function catastrophes()
    {
        return $this->hasMany(Catastrophe::class);
    }
	public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function volunteering()
    {
        return $this->hasMany(Volunteering::class);
    }

    public function collection_center()
    {
        return $this->hasMany(Collection_center::class);
    }
    public function commune()
      {
          return $this->belongsTo(Commune::class);
      }

}
