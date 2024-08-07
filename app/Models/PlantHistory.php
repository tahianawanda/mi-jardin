<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantHistory extends Model
{
    use HasFactory;
    protected $fillable = ['plant_id', 'action', 'details'];

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }

}
