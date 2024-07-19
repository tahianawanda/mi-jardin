@extends('dashboard.layout')

@section('title', 'Detalles de la Planta')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md mt-6">
        <h2 class="text-lg font-semibold">Detalles de la Planta</h2>
        <div class="mt-4">
            <p><strong>Nombre:</strong> {{ $plant->name }}</p>
            <p><strong>Tipo:</strong> {{ $plant->type }}</p>
            <p><strong>Ubicación:</strong> {{ $plant->location ?? 'No especificada' }}</p>
            <p><strong>Estado:</strong> {{ $plant->state ?? 'No especificado' }}</p>
            @if ($plant->image)
                <img src="{{ asset('storage/image/' . $plant->image) }}" alt="Imagen de la Planta" class="mt-4 h-32 w-auto">
            @else
                <p class="mt-4 text-gray-600">No hay imagen disponible para esta planta.</p>
            @endif
            @if ($plant->description)
                <p class="mt-4"><strong>Descripción:</strong><br>{{ $plant->description }}</p>
            @else
                <p class="mt-4 text-gray-600">No hay descripción disponible para esta planta.</p>
            @endif
        </div>
    </div>
@endsection
