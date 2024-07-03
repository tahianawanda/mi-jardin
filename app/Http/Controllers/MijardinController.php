<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class MijardinController extends Controller
{
    public function create()
    {
        return view('acces/plants');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Plant::create($validatedData);

        return redirect()->route('plants.create')->with('success', 'Planta creada correctamente.');
    }
}
