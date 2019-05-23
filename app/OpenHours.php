<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenHours extends Model
{
    protected $fillable = [
        'day',
        'open',
        'openTime',
        'closetime',
    ];
}
