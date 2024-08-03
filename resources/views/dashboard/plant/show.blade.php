@extends('dashboard.layout')

@section('title', 'Detalles de la Planta')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md mt-6">
        <h2 class="text-lg font-semibold">Detalles de la Planta</h2>
        <div class="mt-4">
            <p><strong>Nombre:</strong> {{ $plant->name }}</p>
            <p><strong>Especie:</strong> {{ $plant->type }}</p>
            <p><strong>Ubicación:</strong> {{ $plant->location ?? 'No especificada' }}</p>
            <p><strong>Estado:</strong> {{ $plant->state ?? 'No especificado' }}</p>
            @if($plant->photos->isNotEmpty())
                <div class="mt-4">
                    <h2 class="text-xl font-bold">Imágenes:</h2>
                    @foreach($plant->photos as $photo)
                        <img src="{{ asset('storage/image/' . $photo->url) }}" alt="Foto de {{ $plant->name }}" class="h-16 w-16 rounded-full object-cover">
                    @endforeach
                </div>
            @else
                <p class="mt-4 text-gray-500">No hay imágenes disponibles para esta planta.</p>
            @endif
            @if ($plant->description)
                <p class="mt-4"><strong>Descripción:</strong><br>{{ $plant->description }}</p>
            @else
                <p class="mt-4 text-gray-600">No hay descripción disponible para esta planta.</p>
            @endif
        </div>
    </div>
@endsection
