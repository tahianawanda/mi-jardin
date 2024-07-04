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
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'confirmed']
        ]);
        
        $newUser = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

        return redirect('login');
    }
}
