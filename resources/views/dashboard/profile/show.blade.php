@extends('dashboard.layout')

@section('title', 'Perfil de Usuario')

@section('content')
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold mb-4">Perfil de {{ $user->name }}</h2>

        <div class="mb-4">
            <p><strong>Nombre:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Ubicacion:</strong> {{ $user->location }}</p>
            @if ($user->image)
                <img src="{{ asset('storage/image/' . $user->image) }}" alt="Imagen" class="mt-4 h-32 w-auto rounded-full">
            @else
                <p class="mt-4 text-gray-600">No hay imagen disponible para este usuario.</p>
            @endif
            {{-- Agrega más detalles del perfil según necesites --}}
        </div>

        {{-- Puedes agregar enlaces para editar el perfil, cambiar contraseña, etc. --}}
        <div>
            <a href="{{ route('profile.edit', $user->id) }}" class="bg-blue-200 hover:bg-blue-300 text-blue-700 border border-blue-600 rounded px-3 py-1">Editar Perfil</a>
        </div>
    </div>
@endsection
