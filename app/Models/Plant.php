<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'location',
        'state',
        'image',
        'description'
    ];

    public function user(){
        return $this->belongsTo('User::class');
    }

}
