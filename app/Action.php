<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'actions';

	protected $fillable = [
		'id_user',
		'status',
		'progress',
		'goal',
		'start_date',
		'end_date'
	];
    public function actionOP()
    {
    	return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function catastrophe(){
        return $this->belongsToMany(Catastrophe::class);
    }
}
