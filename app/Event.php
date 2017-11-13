<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

	protected $fillable = [
		'id_location',
		'id_action',
		'name',
		'activity',
		'foods'
	];

public function action()
    {
    	return $this->morphMany(Action::class, 'actionOP');
    }

    public function location()   //relación con banco
	{
        return $this->belongsTo(Location::class);
    }
}
