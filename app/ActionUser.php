<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionUser extends Model
{

    protected $table = 'action_user';

    protected $fillable = [
        'action_id',
        'user_id',
        'action_type',
        'mount'
    ];

    public function action()
    {
        return $this->belongsTo(Action::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }




}
