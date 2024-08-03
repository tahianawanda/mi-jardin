@extends('dashboard.layout')

@section('title', 'Plantas')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md mt-6">
        <form action="{{ route('plant.store') }}" method="POST"  enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Ingrese el nombre de la planta</span><span class="text-red-600">*</span>
                    <input type="text" name="name" required class="form-input mt-1 block w-full">
                </label>
            </div>
            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Ingrese la especie de la planta</span><span class="text-red-600">*</span>
                    <input type="text" name="species" required class="form-input mt-1 block w-full">
                </label>
            </div>
            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Ubicación <span class="font-thin">(opcional)</span></span>
                    <input type="text" name="location" class="form-input mt-1 block w-full">
                </label>
            </div>
            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Estado <span class="font-thin">(opcional)</span></span>
                    <input type="text" name="state" class="form-input mt-1 block w-full">
                </label>
            </div>
            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Imagen <span class="font-thin">(opcional)</span></span>
                    <input type="file" name="image" accept="image/*" class="form-input mt-1 block w-full">
                    @error('image')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </label>
            </div>
            <div>
                <label class="block">
                    <span class="text-gray-700 font-bold">Descripción <span class="font-thin">(opcional)</span></span>
                    <textarea name="description" class="form-textarea mt-1 block w-full"></textarea>
                </label>
            </div>
            <button type="submit" class="bg-green-200 hover:bg-green-300 text-green-700 border border-green-600 rounded p-3">Registrar</button>
        </form>
    </div>
@endsection
