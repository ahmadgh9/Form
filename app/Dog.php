<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $fillable = [
        'breed',
        'link',
        'apartment',
        'sound',
        'hair_loss',
        'daily_exercise',
        'health_care',
        'maintenance',
        'attention',
        'compatibility_with_dogs',
        'compatibility_with_children',
        'compatibility_with_cats',
        'iq',
        'guard',
        'stranger',
        'link'
    ];
}
