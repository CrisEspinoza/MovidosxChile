<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrophe extends Model
{
    public $table = 'catastrophes';

    protected $fillable = [

    ];

    public function action(){
    	return $this->hasMany(Action::class,'id_catastrophe');
    }

    public function user(){
    	return $this->belongsTo(User::class,'id_user','id');
    }

    public function location(){
    	return $this->belongsTo(Location::class, 'id_location','id');
    }
}
