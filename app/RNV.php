<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RNV extends Model
{
    //
    protected $table = 'r_n_vs';

    protected $fillable = [
        'name',
        'last_name',
        'disponible',
        'mail'
    ];
}
