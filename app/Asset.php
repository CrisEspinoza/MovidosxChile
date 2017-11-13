<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = 'assets';

    protected $fillable= [
      'name',
      'type'
    ];

    public function collection_center()
    {
        return $this->belongsToMany(Collection_center::class);
    }

}
