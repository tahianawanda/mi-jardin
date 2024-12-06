<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantae extends Model
{
    protected $fillable = [
        'name',
        'scientific_name',
        'type',
        'growth_habit',
        'native_region',
        'description'
    ];
}
