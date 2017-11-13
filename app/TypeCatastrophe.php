<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCatastrophe extends Model
{
    public $table = 'type_catastrophes';

    public function catastrophe()
    {
        return $this->hasMany(Catastrophe::class);
    }

}
