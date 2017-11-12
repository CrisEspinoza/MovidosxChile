<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function catastrophes()
    {
        return $this->hasMany(Catastrophe::class, 'id_catastrophe', 'id');
    }
	public function events()
    {
        return $this->hasMany(Event::class, 'id_event', 'id');
    }
}
