<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Plantae extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'scientific_name',
        'type',
        'growth_habit',
        'native_region',
        'description'
    ];

    public function kingdom()
    {
        return $this->belongsTo(Kingdom::class);
    }
    public function usetype()
    {
        return $this->hasOne(Usetype::class);
    }
    public function characteristic()
    {
        return $this->hasOne(Characteristic::class);
    }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
