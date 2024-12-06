<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    protected $fillable = [
        'leaf_type',
        'flowering',
        'fruit_type',
        'wood_type'
    ];
}
