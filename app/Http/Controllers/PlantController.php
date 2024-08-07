<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Plant;
use App\Models\Photo;


class PlantController extends Controller
{

    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $user = auth()->user();

        if ($searchTerm) {
            // Buscar plantas según el término de búsqueda
            $plants = $user->plants()
                ->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('species', 'like', '%' . $searchTerm . '%')
                ->get();
        } else {
            // Mostrar todas las plantas
            $plants = $user->plants;
        }

        // Devolver la vista con las plantas y el usuario
        return view('dashboard.plant.index', compact('plants', 'user'));;
    }

    public function create()
    {
        return view('dashboard/plant/create');
    }

    public function store(Request $request)
    {

        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $plant = Plant::create([
            'name' => $request->name,
            'species' => $request->species,
            'location' => $request->location,
            'state' => $request->state,
            'description' => $request->description,
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/image'), $imageName);

            dd($imageName);

            Photo::create([
                'plant_id' => $plant->id,
                'url' => $imageName,
            ]);
        }

        session()->flash('status', 'Registro exitoso');
        session()->flash('status_type', 'success');

        return to_route('plant.index');
    }
    public function show($id)
    {
        $user = Auth::user();

        $plant = $user->plants()->with('photos')->findOrFail($id);

        return view('dashboard/plant/show', compact('plant'));
    }

    public function edit($id)
    {
        // Obtén el usuario autenticado
        $user = Auth::user();

        // Encuentra la planta por ID dentro de la relación de plantas del usuario
        $plant = $user->plants()->findOrFail($id);

        // Retorna la vista de edición con la planta encontrada y el usuario
        return view('dashboard/plant/edit', compact('plant', 'user'));
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

        $user = Auth::user();
        $plant = $user->plants()->findOrFail($id);

        $plant->update([
            'name' => $request->name,
            'type' => $request->type,
            'location' => $request->location,
            'state' => $request->state,
            'description' => $request->description,
        ]);

        // Si se ha subido una imagen, guardarla en la base de datos correspondiente
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/image'), $imageName);

            // Verificar si la foto ya existe
            $photo = Photo::where('plant_id', $plant->id)->first();

            if ($photo) {
                $photo->update([
                    'url' => $imageName,
                ]);
            } else {
                Photo::create([
                    'plant_id' => $plant->id,
                    'url' => $imageName,
                ]);
            }
        }

        session()->flash('status', '¡Registro editado exitosamente!');
        session()->flash('status_type', 'info');

        return to_route('plant.index');
    }
    public function destroy($id)
    {
        $user = Auth::user();

        // Encuentra la planta por ID dentro de la colección de plantas del usuario
        $plant = $user->plants()->findOrFail($id);

        // Elimina la planta
        $plant->delete();

        // Flash message para indicar que el registro fue eliminado exitosamente
        session()->flash('status', '¡Registro eliminado exitosamente!');
        session()->flash('status-type', 'error'); // Tipo de mensaje

        return to_route('plant.index');
    }

}
