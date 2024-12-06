<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];
}
