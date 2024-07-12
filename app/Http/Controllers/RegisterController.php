<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{

    public function create()
    {
        return view ('acces/register');
    }

    public function store()
    {
        request()->validate([
            'name' => ['required', 'min:6', 'max:255'],
            'email' => ['required', 'max:255'],
            'password' => ['required','min:6','max:255', 'confirmed']
        ]);
        
        $newUser = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

        session()->flash('status', 'Successful registration!');

        return redirect('login');
    }
}
