<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSettings extends Model
{
    protected $fillable = [
        'email',
        'facebook',
        'facebook',
        'twitter',
        'instagram',
        'pinterest',
    ];
}
