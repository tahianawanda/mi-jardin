@extends('dashboard.layout')

@section('title', 'Editar Perfil')

@section('content')
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold mb-4">Editar Perfil</h2>

        <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" class="form-input mt-1 block w-full">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" class="form-input mt-1 block w-full">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700">Ubicacion</label>
                <input id="location" type="text" name="location" value="{{ old('location', $user->location) }}" autocomplete="location" class="form-input mt-1 block w-full">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Imagen <span class="font-thin">(opcional)</span></span>
                    <input type="file" name="image" accept="image/*" class="form-input mt-1 block w-full">
                    @if ($user->image)
                        <p class="text-sm text-gray-600 mt-1 font-bold">Imagen actual</p>
                        <img src="{{ asset('storage/image/' . $plant->image) }}" alt="Imagen Actual" class="h-20 mt-1">
                    @endif
                    @error('image')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </label>
            </div>
            {{-- Agrega más campos que desees editar --}}

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Guardar Cambios
                </button>
                <a href="{{ route('profile.show') }}" class="ml-2 text-gray-600">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
