<x-layout>
    <div class="container">
        <h2>List of plants</h2>
        @foreach($plants as $plant)
        <div class="little-container">
            <h3>Name: </h3> {{ $plant->name }}
            <h3>Type: </h3> {{ $plant->type }}
            <form action="{{ route('plant.show', $plant) }}">
                @csrf
                <button type="submit">Show</button>
            </form>
        </div>
        @endforeach
        <a class="bg-primary-400 p-1 rounded-lg hover:bg-primary-300" href="{{ route('plant.create') }}">Agree</a>
    </div>
</x-layout>