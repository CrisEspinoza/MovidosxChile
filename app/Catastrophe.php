<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrophe extends Model
{
    public $table = 'catastrophes';

    protected $fillable = ['name','location_id','typeCatastrophe_id','description'
    ];

    public function action(){
    	return $this->hasMany(Action::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function location(){
    	return $this->belongsTo(Location::class);
    }

    public function typeCatastrophe(){
    	return $this->belongsTo(TypeCatastrophe::class, 'typeCatastrophe_id', 'id');
    }

}
