<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedFeedback extends Model
{
    protected $fillable = [
        'active',
        'link',
    ];
}
