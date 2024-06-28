<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLoginForm(){
        return view ('acces/login');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'user' => ['string', 'min:6'],
            'password' => ['string', 'min:6'],
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
            'name' => ['required', 'string', 'min:6'],
            'lastname' => ['required', 'string', 'min:6'],
            'user' => ['required', 'string', 'min:4', ],
            'password' => ['required', 'min:6', 'confirmed'],
            'email' => ['required', 'unique:user'],
        ]);

        $newUSer = User::create([
            'name' => $validateData['name'],
            'lastname' => $validateData['lastname'],
            'user' => $validateData['user'],
            'password' => Hash::make($validateData['password']),
            'email' => $validateData['email']
        ]);

        return redirect('login/login.show')->with('status', 'Registrarion successul. Please
        login.');
    }
}
