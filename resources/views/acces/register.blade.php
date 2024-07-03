@extends('acces.layout')

@section('title', 'Registro')

@section('content')
<div class="container">
    <div class="image-container">
        <img src="{{ asset('image/hongos.png') }}" alt="Imagen">
    </div>
    <div class="form-container">
        <div class="form">
            <h2>Regístrate</h2>
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <label>
                    Ingrese su nombre completo:
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Ingrese su nombre" required>
                </label>
                <label>
                    Ingrese su correo electronico:
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo" required>
                </label>
                <label>
                    Ingrese su contraseña:
                    <input type="password" name="password" required>
                </label>
                <label>
                    Confirme su contraseña:
                    <input type="password" name="password_confirmation" required>
                </label>
                <button type="submit">Crear Usuario</button>
                <a href="{{ route('login.create') }}" class="form-link">¿Ya tienes una cuenta? Ingresa por aquí</a>
            </form>
        </div>
    </div>
</div>



    @endsection
