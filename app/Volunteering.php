<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteering extends Model
{
     protected $table = 'volunteerings';

	protected $fillable = [
		'type_work',
		'profile_voluntary',
		'min_voluntaries',
		'max_voluntaries',
		'location_id'
	];

	public function action()
    {
    	return $this->morphMany(Action::class, 'actionOP');
    }

        public function location()
	{
        return $this->belongsTo(Location::class);
    }
}
