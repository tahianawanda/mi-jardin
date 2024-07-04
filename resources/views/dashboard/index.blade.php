@extends('dashboard.layout')

@section('title', 'Inicio')

@section('content')
    <div class="bienvenida">
        <h1>Bienvenido a Mi Jardín API</h1>
        <p>Administra y explora tu colección de plantas. Desde agregar nuevas plantas hasta revisar el historial de actividades.</p>
    </div>

    <div class="estadisticas">
        <h2>Estadísticas</h2>
        <ul>
            <li>Total de Plantas: <span></span></li>
            <li>Especies Diferentes: <span></span></li>
            <li>Usuarios Registrados: <span></span></li>
        </ul>
    </div>

    <div class="footer">
        <p>Contacto: soporte@mijardinapi.com</p>
    </div>
@endsection
