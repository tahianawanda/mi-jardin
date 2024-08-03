<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        
            // Verifica si el perfil existe (es decir, no está vacío)
        if ($user->profile()->exists()) {
            // Solo carga el perfil si existe
            $user->load('profile');
        }
        return view('dashboard/profile/show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id); // Busca al usuario por su ID

        return view('dashboard.profile.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'nullable|string|max:255',
            'biography' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'github' => 'nullable|string|max:255',
            'web' => 'nullable|string|max:255',
        ]);

        // Buscar al usuario por su ID
        $user = User::findOrFail($id);

        // Actualizar los datos del usuario
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Obtener o crear el perfil del usuario
        $profile = $user->profile ?? new Profile(['user_id' => $user->id]);

        // Manejo de la imagen
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/image'), $imageName);
            $profile->image = $imageName;
        }

        // Actualizar los datos del perfil
        $profile->update([
            'location' => $request->location,
            'biography' => $request->biography,
            'instagram' => $request->instagram,
            'github' => $request->github,
            'web' => $request->web,
        ]);

        // Guardar el perfil si se ha creado uno nuevo
        if (!$profile->exists) {
            $profile->save();
        }

        // Mensaje de éxito y redirección
        session()->flash('status', 'Perfil actualizado correctamente');
        session()->flash('status_type', 'info'); // Tipo de mensaje

        return redirect()->route('profile.show');
    }
}

