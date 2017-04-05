<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model

{
    protected $fillable = [
        'role', 'email','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
