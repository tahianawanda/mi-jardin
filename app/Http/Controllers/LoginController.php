<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view ('acces/login');
    }

    public function store()
    {
        $credenciales = request()->validate([
            'email' => ['required', 'max:255'],
            'password' => ['required', 'min:6', 'max:255']
        ]);

        if(Auth::attempt($credenciales)){
            request()->session()->regenerate(); 
            return redirect()->intended('/plant');      
        }
        
        throw ValidationException::withMessages([
            'email' => __('auth.failed')
        ]);
    }

    public function logout(){

        Auth::logout();
        request()->session()->regenerateToken();
        request()->session()->invalidate();
        return redirect('/login'); 
    }
}
