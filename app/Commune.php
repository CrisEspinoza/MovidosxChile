<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $table = 'communes';

    protected $fillable= [
      'name'
    ];

    public function location()
    {
        return $this->hasMany(Location::class, 'location_id', 'id');
    }

    public function region()
      {
          return $this->belongsTo(Region::class, 'region_id', 'id');
      }
}
