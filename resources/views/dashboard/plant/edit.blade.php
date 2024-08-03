@extends('dashboard.layout')

@section('title', 'Editar Planta')

@section('content')
    <div class="bg-white rounded-lg p-4">
        <h2 class="text-lg font-semibold">Editar Planta</h2>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-md mt-4">
        <form action="{{ route('plant.update', $plant->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Nombre de la planta</span><span class="text-red-600">*</span>
                    <input type="text" name="name" value="{{ old('name', $plant->name) }}" required class="form-input mt-1 block w-full">
                </label>
            </div>

            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Tipo de planta</span><span class="text-red-600">*</span>
                    <input type="text" name="type" value="{{ old('species', $plant->species) }}" required class="form-input mt-1 block w-full">
                </label>
            </div>

            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Ubicación <span class="font-thin">(opcional)</span></span>
                    <input type="text" name="location" value="{{ old('location', $plant->location) }}" class="form-input mt-1 block w-full">
                </label>
            </div>

            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Estado <span class="font-thin">(opcional)</span></span>
                    <input type="text" name="state" value="{{ old('state', $plant->state) }}" class="form-input mt-1 block w-full">
                </label>
            </div>

            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Imagen <span class="font-thin">(opcional)</span></span>
                    <input type="file" name="image" accept="image/*" class="form-input mt-1 block w-full">
                    @if ($plant->photo && $plant->photo->url)
                        <p class="text-sm text-gray-600 mt-1 font-bold">Imagen actual</p>
                        <img src="{{ asset('storage/' . $user->plant->photo->url) }}" alt="Imagen Actual" class="h-20 mt-1">
                    @endif
                    @error('image')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </label>
            </div>

            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Descripción <span class="font-thin">(opcional)</span></span>
                    <textarea name="description" class="form-textarea mt-1 block w-full">{{ old('description', $plant->id) }}</textarea>
                </label>
            </div>

            <button type="submit" class="bg-blue-200 hover:bg-blue-300 text-blue-700 border border-blue-600 rounded p-3">Actualizar</button>
        </form>
    </div>
@endsection
