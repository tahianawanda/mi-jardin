@extends('dashboard.layout')

@section('title', 'Perfil de Usuario')

@section('content')
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold mb-4">Perfil de {{ $user->name }}</h2>

        <div class="mb-4">
            @if($user->hasProfile())
                @if ($user->profile->image)
                <img src="{{ asset('storage/image/' . $user->profile->image) }}" alt="Profile Image" class="h-32 w-32 rounded-full object-cover">
                @else
                    <p>No profile image available.</p>
                @endif
                <p><strong>Ubicación:</strong> {{ $user->profile->location ?? 'No disponible' }}</p>
                <p><strong>Biografía:</strong> {{ $user->profile->biography ?? 'No disponible' }}</p>
                <p><strong>Instagram:</strong> {{ $user->profile->instagram ?? 'No disponible' }}</p>
                <p><strong>Github:</strong> {{ $user->profile->github ?? 'No disponible' }}</p>
                <p><strong>Web:</strong> {{ $user->profile->web ?? 'No disponible' }}</p>
            @endif
        </div>

        <div>
            <a href="{{ route('profile.edit', $user->id) }}" class="bg-blue-200 hover:bg-blue-300 text-blue-700 border border-blue-600 rounded px-3 py-1">Editar Perfil</a>
        </div>
    </div>
@endsection
