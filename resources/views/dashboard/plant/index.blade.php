@extends('dashboard.layout')

@section('title', 'Lista de Plantas')

@section('content')
    <div class="bg-white rounded-lg p-4">
        <h2 class="text-lg font-semibold">Plantas de: <span class="font-thin">{{ Auth::user()->name }}</span> </h2>
    </div>
    <div class="bg-white p-4 rounded-lg shadow-md mt-4">
        @if ($plants->isEmpty())
            <p class="text-gray-600">No hay plantas registradas.</p>
        @else
            <ul>
                @foreach ($plants as $plant)
                    <li class="border-b border-gray-200 py-2 flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="{{ asset('storage/image/' . $plant->image) }}" alt="Imagen" class="h-8 w-8 rounded-full object-cover mr-2">
                            <div>
                                <p class="text-lg font-semibold">{{ $plant->name }}</p>
                                <p class="text-sm text-gray-600">{{ $plant->type }}</p>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <a href="{{ route('plant.edit', $plant->id) }}" class="bg-blue-200 hover:bg-blue-300 text-blue-700 border border-blue-600 rounded px-3 py-1">Editar</a>
                            <form action="{{ route('plant.destroy', $plant->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-200 hover:bg-red-300 text-red-700 border border-red-600 rounded px-3 py-1">Eliminar</button>
                            </form>
                            <a href="{{ route('plant.show', $plant->id) }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 border border-gray-600 rounded px-3 py-1">Ver Detalles</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    
    <div class="bg-white rounded-lg p-4 mt-4">
        <a href="{{ route('plant.create') }}" class="bg-red-200 hover:bg-red-300 text-red-700 border border-red-600 rounded p-3 px-20">Agregar</a>
    </div>
@endsection
