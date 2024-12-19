<x-layout>
    <div class="container">
        <form action="{{ route('plant.update', $plant) }}">
            @csrf
            <label>
                Name:
                <input type="text" name="name" placeholder="{{ $plant->name }}">
            </label>
            <label>
                Scientific name:
                <input type="text" name="scientific_name placeholder="{{ $plant->scientific_name }}">
            </label>
            <label>
                Type:
                <input type="text" name="type" placeholder="{{ $plant->type }}>
            </label>
            <label>
                Growth habit:
                <input type="text" name="growth_habit" placeholder="{{ $plant->growth_habit }}>
            </label>
            <label>
                Native region:
                <input type="text" name="native_region" placeholder="{{ $plant->native_region }}>
            </label>
            <label>
                Description:
                <input type="text" name="description" placeholder="{{ $plant->description }}>
            </label>
    
            <button type="submit">Save</button>
        </form>
    </div>
</x-layout>