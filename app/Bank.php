<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
		protected $table = 'banks';

    protected $fillable= [
      'name'
    ];

    public function donation(){

      return $this->hasmany(Donation:: class );
    }

}
