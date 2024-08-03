@extends('dashboard.layout')

@section('title', 'Editar Perfil')

@section('content')
    <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold mb-4">Editar Perfil</h2>

        <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">
                    Nombre
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" class="form-input mt-1 block w-full">
                </label>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">
                    Correo Electrónico
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" class="form-input mt-1 block w-full">
                </label>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">
                    Ubicación
                    <input type="text" name="location" value="{{ old('location', $user->profile->location ?? '') }}" autocomplete="location" class="form-input mt-1 block w-full">
                </label>
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">
                    Biografía
                    <input type="text" name="biography" value="{{ old('biography', $user->profile->biography ?? '') }}" autocomplete="biography" class="form-input mt-1 block w-full">
                </label>
                @error('biography')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">
                    Instagram
                    <input type="text" name="instagram" value="{{ old('instagram', $user->profile->instagram ?? '') }}" autocomplete="instagram" class="form-input mt-1 block w-full">
                </label>
                @error('instagram')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">
                    Github
                    <input type="text" name="github" value="{{ old('github', $user->profile->github ?? '') }}" autocomplete="github" class="form-input mt-1 block w-full">
                </label>
                @error('github')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">
                    Web
                    <input type="text" name="web" value="{{ old('web', $user->profile->web ?? '') }}" autocomplete="web" class="form-input mt-1 block w-full">
                </label>
                @error('web')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            
            <div class="mb-4">
                <label class="block">
                    <span class="text-gray-700 font-bold">Imagen <span class="font-thin">(opcional)</span></span>
                    <input type="file" name="image" accept="image/*" class="form-input mt-1 block w-full">
                    @if ($user->profile)
                        @if ($user->profile->image)
                            <img src="{{ asset('storage/image/' . $user->profile->image) }}" alt="Imagen del Perfil" class="h-20 mt-1">
                        @else
                            <p>No hay imagen de perfil disponible.</p>
                        @endif
                    @else
                        <p>No hay perfil disponible.</p>
                    @endif
                    @error('image')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </label>
            </div>
            

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                    Guardar Cambios
                </button>
                <a href="{{ route('profile.show') }}" class="ml-2 text-gray-600">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
