<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plantae;
use App\Models\Characteristic;
use App\Models\Usetype;
use App\Models\Photo;
use App\Models\Kingdom;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Family;
use App\Models\Genre;
use App\Models\Specie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
{
    public function index()
    {
        $plants = Plantae::all();

        return view('my-garden.index', ['plants' => $plants]);
    }

    public function create()
    {
        return view('plants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'scientific_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'growth_habit' => 'required|string|max:255',
            'native_region' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $plant = Plantae::create([
            'name' => $request->name,
            'scientific_name' => $request->scientific_name,
            'type' => $request->type,
            'growth_habit' => $request->growth_habit,
            'native_region' => $request->native_region,
            'description' => $request->description,
            'user_id' => Auth::id(),
            'kingdom_id' => 1
        ]);

        session()->flash('status', 'Plant successfully added');


        return redirect()->route('plant.index');
    }

    public function show(Plantae $plant)
    {
        return view('plants.show', ['plant' => $plant]);
    }

    public function edit(Plantae $plant)
    {
        return view('plants.edit', ['plant' => $plant]);
    }

    public function update(Request $request, $plant)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'scientific_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'growth_habit' => 'required|string|max:255',
            'native_region' => 'required|string|max:255',
            'description' => 'nullable|string'

        ]);

        $plant->update([
            'name' => $request->name,
            'scientific_name' => $request->scientific_name,
            'type' => $request->type,
            'growth_habit' => $request->growth_habit,
            'native_region' => $request->native_region,
            'description' => $request->description,
        ]);

        $plant->save();

        session()->flash('Plant successfully edited');

        return redirect('plant.index');
    }

    public function destroy(Plantae $plant)
    {
        $plant->destroy($plant);

        session()->flash('status', 'Plant successfully removed');

        return redirect('plant.index');
    }
}
