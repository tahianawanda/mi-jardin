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
        
        return redirect('/login');
    }

    public function logout(){

        Auth::logout();
        request()->session()->regenerateToken();
        request()->session()->invalidate();
        return redirect('/login'); 
    }
}
