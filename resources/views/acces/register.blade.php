@extends('acces.layout')

@section('title', 'Registro')

@section('content')
    <div class="form">
        <h2>Registrese</h2>
        <form action="POST" method="{{ route('register') }}">
            <label for="name_id">Ingrese su nombre</label>
            <input type="text" id="name_id" name="name">
            <label for="lastname_id">Ingrese su apellido</label>
            <input type="text" id="lastname_id" name="lastname">
            <label for="user_id">Ingrese su usuario</label>
            <input type="text" id="user_id" name="user">
            <label for="email_id">Ingrese su correo</label>
            <input type="text" id="email_id" name="email">
            <label for="password_id">Ingrese su contraseña</label>
            <input type="text" id="password_id" name="password">
            <button type="button">Registrarme</button>

        </form>

    </div>
    @endsection
