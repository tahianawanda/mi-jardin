@extends('acces.layout')

@section('title', 'Registro')

@section('content')
<div class="container">
    <div class="image-container">
        <img src="{{ asset('image/2.png') }}" alt="Imagen">
    </div>
    <div class="form-container">
        <div class="form">
            <h2>Regístrate</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label>
                    Ingrese su nombre completo:
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Ingrese su nombre" required>
                    @error('name')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </label>
                <label>
                    Ingrese su correo electronico:
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo" required>
                    @error('email')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </label>
                <label>
                    Ingrese su contraseña:
                    <input type="password" name="password" required>
                    @error('password')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </label>
                <label>
                    Confirme su contraseña:
                    <input type="password" name="password_confirmation" required>
                    @error('password')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </label>
                <button type="submit">Crear Usuario</button>
                <a href="{{ route('login') }}" class="form-link">¿Ya tienes una cuenta? Ingresa por aquí</a>
            </form>
        </div>
    </div>
</div>



    @endsection
