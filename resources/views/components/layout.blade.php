<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'My Garden'}}</title>
    @vite(['resources/css/app.css', 'resources/css/components/header.css', 'resources/css/components/main.css',
    'resources/css/components/footer.css', 'resources/js/app.js'])
</head>

<body>

    <header class="bg-background-400">
        <x-partials.navigation></x-partials.navigation>
    </header>

    <main class="bg-background-200">
        {{ $slot }}
    </main>

    <footer class="bg-background-400">
        <p>Made for Tahiana Wanda D' Astolfo</p>
    </footer>

</body>

</html>