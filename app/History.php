<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'histories';

	protected $fillable = [
		'date'
	];

	public function usuario()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
