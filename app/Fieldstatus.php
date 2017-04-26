<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fieldstatus extends Model
{
    protected $fillable=[
        'fieldname',
        'availability',
        'status',
    ];
}
