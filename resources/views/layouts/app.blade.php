<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My Scientific Garden') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/components/header.css', 'resources/css/components/main.css',
    'resources/css/components/footer.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Page Heading -->
    <header class="bg-white dark:bg-background-800">
        <x-partials.navigation></x-partials.navigation>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</body>

</html>