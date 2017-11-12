<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'action';
    
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
}
