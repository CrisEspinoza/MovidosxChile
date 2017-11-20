<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

  public function commune()
  {
      return $this->hasMany(Commune::class, 'commune_id', 'id');
  }
}
