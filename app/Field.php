<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable=[
        'stadium',
        'capacity',
        'uses',
        'reservationdate',
        'from',
        'to'
    ];
}
