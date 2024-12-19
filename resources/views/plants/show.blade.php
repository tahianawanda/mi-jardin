<x-layout>
    <div class="container">
        <h3>Name:</h3> {{ $plant->name }}
        <h3>Scientific name:</h3> {{ $plant->scientific_name }}
        <h3>Type:</h3> {{ $plant->type }}
        <h3>Growth habit:</h3> {{ $plant->growth_habit }}
        <h3>Native region:</h3> {{ $plant->native_region }}
        <h3>Description:</h3> {{ $plant->description }}
        <form action="{{ route('plant.edit', $plant) }}">
            @csrf
            <button type="submit">Edit</button>
        </form>
    </div>
</x-layout>