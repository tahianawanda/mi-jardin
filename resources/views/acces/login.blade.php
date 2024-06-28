@extends('acces.layout')

@section('title', 'Login')

@section('content')
    <div class="form">
        <h2>Ingrese su cuenta</h2>
        <form method="POST" action="{{ route('login') }}">
                <label for="user_id">Ingrese un nombre de usuario</label>
                <input type="text" id="user_id" name="user">
                <label for="email_id">Ingrese un correo</label>
                <input type="email" id="name_id" name="email" placeholder="tahiana@example.com">
                <label for="password_id">Ingrese una contraseña</label>
                <input type="password" id="password_id" name="password">
                <button type="submit">Ingresar</button>
            
        </form>
    </div>
@endsection