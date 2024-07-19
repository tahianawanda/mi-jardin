@extends('dashboard.layout')

@section('title', 'Historial de Plantas')

@section('content')
    <div class="bg-white p-4 rounded-lg shadow-md mt-4">
        <h2 class="text-lg font-semibold mb-4">Historial de Plantas</h2>
        @if ($plantsHistory->isEmpty())
            <p class="text-gray-600">No hay plantas registradas.</p>
        @else
            <ul>
                @foreach ($plantsHistory as $plant)
                    <li class="border-b border-gray-200 py-2">
                        <p>
                            {{ $plant->name }} - Registrada el {{ $plant->created_at->format('d/m/Y H:i:s') }}
                        </p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
