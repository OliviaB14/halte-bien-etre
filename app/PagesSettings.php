<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagesSettings extends Model
{
    protected $fillable = [
        'pageTitle',
        'section',
        'body',
    ];
}
