<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $table = 'donations';

	protected $fillable = [
		'id_bank',
		'mount',
		'type'
	];

	public function action()
    {
    	return $this->morphMany(Action::class, 'actionOP');
    }

	public function bank()
	{
        return $this->belongsTo(Bank::class);
    }
}
