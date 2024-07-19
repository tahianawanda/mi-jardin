<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plant;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $plants = $user->plants; // Obtiene las plantas del usuario autenticado

        return view('dashboard/plant/index', compact('plants'));
    }

    public function create(){
        return view('dashboard/plant/create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/image'), $imageName);
        } else {
            $imageName = null; // Opcionalmente, si la imagen es opcional
        }
        
        Plant::create([
            'user_id' => Auth()->id(),
            'name' => $request->name,
            'type' => $request->type,
            'image' => $imageName,
            'location' => $request->location,
            'state' => $request->state,
            'description' => $request->description,
        ]);
        session()->flash('status', 'Registro exitoso');
        session()->flash('status_type', 'success'); // Agrega el tipo de mensaje aquí

        // Redireccionar a la página de creación de planta
        return to_route('plant.index');
    }
    public function show($id){
        $plant = Plant::findOrFail($id);

        return view('dashboard/plant/show', compact('plant'));
    }
    public function edit($id)
    {
        $plant = Plant::findOrFail($id);
        return view('dashboard.plant.edit', compact('plant'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $plant = Plant::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/image'), $imageName);
        } else {
            $imageName = null; // Opcionalmente, si la imagen es opcional
        }

        $plant->update([
            'name' => $request->name,
            'type' => $request->type,
            'location' => $request->location,
            'state' => $request->state,
            'description' => $request->description,
            'image' => $imageName
        ]);

         // Flash message
        session()->flash('status', '¡Registro editado exitosamente!');
        session()->flash('status-type', 'info'); // Tipo de mensaje

        // Redireccionar a la página de creación de planta
        return to_route('plant.index');
    }
    public function destroy($id)
    {
        $plant = Plant::findOrFail($id);
        $plant->delete();

        // Flash message
        session()->flash('status', '¡Registro eliminado exitosamente!');
        session()->flash('status-type', 'error'); // Tipo de mensaje


        // Redireccionar a la página de creación de planta
        return to_route('plant.index');    }
}
