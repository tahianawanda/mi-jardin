<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user(); // Obtener el usuario autenticado

        return view('dashboard/profile/show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id); // Busca al usuario por su ID

        return view('dashboard.profile.edit', compact('user')); // Asegúrate de la ruta correcta a la vista
    }
    public function update(Request $request, $id)
    {
        // Validación de datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'nullable|string|max:255',
            // Otras reglas de validación según sea necesario
        ]);

        // Actualización del usuario
        $user = User::findOrFail($id); // Busca al usuario por su ID

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/image'), $imageName);
        } else {
            $imageName = null; // Opcionalmente, si la imagen es opcional
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'location' => $request->location,
            'image' => $imageName,
        ]);        

        // Flash message
        session()->flash('status', 'Usuario actualizado correctamente');
        session()->flash('status_type', 'info'); // Tipo de mensaje

        // Redireccionar a la página de perfil
        return redirect()->route('profile.show');   
    }

}
