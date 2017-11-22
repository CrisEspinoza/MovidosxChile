<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection_center extends Model
{
    protected $table = 'collection_centers';

	protected $fillable = [
		'name'
	];

	public function action()
    {
    	return $this->morphMany(Action::class, 'actionOP');
    }

    public function assets(){
         return $this->belongsToMany(Asset::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
