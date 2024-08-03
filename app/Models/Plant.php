<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'species',
        'location',
        'state',
        'description',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }
}
