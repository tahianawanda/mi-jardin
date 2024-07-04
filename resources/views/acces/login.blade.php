@extends('acces.layout')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="image-container">
        <img src="{{ asset('image/1.png') }}" alt="Imagen">
    </div>
    <div class="form-container">
        <div class="form">
            <h2>Ingrese su cuenta</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label>
                    Ingrese su correo electronico:
                    <input type="email" name="email" placeholder="tahiana@example.com" required>
                </label>
                <label>
                    Ingrese su contraseña:
                    <input type="password" name="password" required>
                </label>
                <button type="submit">Ingresar</button>
                <a href="{{ route('register') }}" class="form-link">¿No tienes cuenta? Regístrate</a>
            </form>
        </div>
    </div>
</div>

@endsection