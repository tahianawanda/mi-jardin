<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view ('acces/login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $credenciales = request()->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credenciales)){
            request()->session()->regenerate(); 
            return redirect()->intended('/');      
        }
        
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
    public function logout(){

        Auth::logout();
        request()->session()->regenerateToken();
        request()->session()->invalidate();
        return redirect('/login'); // Redirige a la página de inicio de sesión después de cerrar sesión
    }
}
