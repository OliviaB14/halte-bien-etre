<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSettings extends Model
{
    protected $fillable = [
        'label',
        'value',
    ];
}
