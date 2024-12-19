<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My Scientific Garden') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="" text-gray-900 ">
        <div class=" min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100
    dark:bg-background-700">
    <div>
        <a href="/">
            <img class="w-40 rounded-full" src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-background-600 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
    </div>
</body>

</html>