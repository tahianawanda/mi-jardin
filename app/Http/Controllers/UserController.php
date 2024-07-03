<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Asegúrate de importar Auth
use App\Models\User; // Asegúrate de importar el modelo User
use Illuminate\Support\Facades\Hash; // Asegúrate de importar Hash

class UserController extends Controller
{
    public function showLoginForm(){
        return view ('acces/login');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'user' => ['string', 'min:6'],
            'email' => ['string'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard/inicio');
        }
        return redirect()->withErrors([
            'user' => 'Usted no se encuentra en nuestros registros'
        ])->withInput($request->only('user'));
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    public function showRegisterForm(){
        return view ('acces/register');
    }
    public function register(Request $request){
        $validateData = $request->validate([
            'name' => ['required'],
            'lastname' => ['required'],
            'user' => ['required'],
            'password' => ['required'],
            'email' => ['required'],
        ]);

        $newUser = User::create([
            'name' => $validateData['name'],
            'lastname' => $validateData['lastname'],
            'user' => $validateData['user'],
            'password' => Hash::make($validateData['password']),
            'email' => $validateData['email']
        ]);

        // Redirige a la ruta de login después de crear el usuario
        return redirect('acces/login')->with('status', 'Registro exitoso. Por favor inicia sesión.');
    }
}
