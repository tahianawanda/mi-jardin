<?php

namespace App\Observers;

use App\Models\Plant;
use App\Models\PlantHistory;



class PlantObserver
{
    /**
     * Handle the Plant "created" event.
     */
    public function created(Plant $plant)
    {
        PlantHistory::create([
            'plant_id' => $plant->id,
            'action' => 'created',
            'details' => 'Plant created with name: ' . $plant->name,
        ]);
    }

    /**
     * Handle the Plant "updated" event.
     */
    public function updated(Plant $plant)
    {
        PlantHistory::create([
            'plant_id' => $plant->id,
            'action' => 'updated',
            'details' => 'Plant updated with name: ' . $plant->name,
        ]);
    }

    /**
     * Handle the Plant "deleted" event.
     */
    public function deleted(Plant $plant)
    {
        PlantHistory::create([
            'plant_id' => $plant->id,
            'action' => 'deleted',
            'details' => 'Plant deleted with name: ' . $plant->name,
        ]);
    }

    /**
     * Handle the Plant "restored" event.
     */
    public function restored(Plant $plant): void
    {
        //
    }

    /**
     * Handle the Plant "force deleted" event.
     */
    public function forceDeleted(Plant $plant): void
    {
        //
    }
}
