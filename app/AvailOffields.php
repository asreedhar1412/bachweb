<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailOffields extends Model
{
    protected $table="availabilityoffields";
    protected $fillable=[
        'field_id',
        'reservationdate',
        'from',
        'to',
    ];
}
