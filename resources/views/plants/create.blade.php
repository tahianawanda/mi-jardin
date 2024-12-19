<x-layout>
    <form action="{{ route('plant.store') }}" method="POST">
        @csrf
        <label>
            Name:
            <input type="text" name="name">
        </label>
        <label>
            Scientific name:
            <input type="text" name="scientific_name">
        </label>
        <label>
            Type:
            <input type="text" name="type">
        </label>
        <label>
            Growth habit:
            <input type="text" name="growth_habit">
        </label>
        <label>
            Native region:
            <input type="text" name="native_region">
        </label>
        <label>
            Description:
            <input type="text" name="description">
        </label>

        <button class="bg-primary-400 p-1 rounded-lg hover:bg-primary-300">Save</button>
    </form>
</x-layout>