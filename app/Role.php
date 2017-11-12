<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = 'roles';

    protected $fillable = [
    	'type'
    ];

    public function user(){

    	return $this->hasMany(User::class, 'id_role','id');
    }
}
