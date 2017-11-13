<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'run',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function history()
    {
        return $this->hasMany(History::class);
    }

    public function action()
    {
        return $this->belongsToMany(Action::class);
    }

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    public function catastrophes()
    {
       return $this->hasMany(Catastrophe::class);
    }
}
