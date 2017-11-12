<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntary extends Model
{
    protected $table = 'voluntaries';

    protected $fillable = [
       	'name',
       	'lastname',
        'age'
    ];
}
