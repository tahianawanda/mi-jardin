<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class HistoryController extends Controller
{
    

    public function index()
    {
        $plantsHistory = Plant::orderBy('created_at', 'desc')->get(); // Obtener todos los registros de plantas ordenados por fecha de creación descendente

        return view('dashboard/history', compact('plantsHistory'));
    }


}
