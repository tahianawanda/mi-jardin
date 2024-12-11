<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Kingdom extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    public function plants()
    {
        return $this->hasMany(Plantae::class);
    }
}
