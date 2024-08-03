@extends('acces.layout')

@section('title', 'Registro')

@section('content')
<div class="flex h-screen w-screen overflow-hidden">
    <!-- Contenedor de la imagen -->
    <div class="w-3/5 h-full">
        <img src="{{ asset('image/2.png') }}" alt="Imagen" class="object-cover w-full h-full">
    </div>
    
    <!-- Contenedor del formulario -->
    <div class="w-2/5 h-full bg-black flex items-center justify-center relative">
        <!-- Pseudo-elemento para superponer la imagen -->
        <div class="absolute left-0 w-5 h-full bg-cover" style="background-image: url('{{ asset('image/hongos.png') }}');"></div>

        <!-- Formulario -->
        <div class="relative z-10 max-w-lg w-full text-white text-center">
            <h2 class="text-3xl mb-6">Regístrate</h2>
            <form method="POST" action="{{ route('register.store') }}" class="space-y-6">
                @csrf
                <div class="text-left">
                    <label class="block mb-2 text-gray-400">
                        Ingrese su nombre completo <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Ingrese su nombre" required class="w-full p-2 bg-white bg-opacity-10 text-white border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-white">
                    @error('name')
                        <div class="form-error text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-left">
                    <label class="block mb-2 text-gray-400">
                        Ingrese su correo electronico <span class="text-red-600">*</span>
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Ingrese su correo" required class="w-full p-2 bg-white bg-opacity-10 text-white border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-white">
                    @error('email')
                        <div class="form-error text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-left">
                    <label class="block mb-2 text-gray-400">
                        Ingrese su contraseña <span class="text-red-600">*</span>
                    </label>
                    <input type="password" name="password" required class="w-full p-2 bg-white bg-opacity-10 text-white border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-white">
                    @error('password')
                        <div class="form-error text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-left">
                    <label class="block mb-2 text-gray-400">
                        Confirme su contraseña <span class="text-red-600">*</span>
                    </label>
                    <input type="password" name="password_confirmation" required class="w-full p-2 bg-white bg-opacity-10 text-white border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-white">
                    @error('password')
                        <div class="form-error text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="w-full py-3 bg-green-600 hover:bg-green-700 rounded text-lg font-semibold">
                    Crear Usuario
                </button>
                <a href="{{ route('login') }}" class="block mt-6 text-lg text-blue-400 hover:text-blue-600">
                    ¿Ya tienes una cuenta? Ingresa por aquí
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
