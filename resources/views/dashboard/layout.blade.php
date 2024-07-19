<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Mi Jardín')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    @vite('resources/css/dashboard.css')
</head>
<body>
    @include('dashboard.partials.nave')
    @if (session('status'))
        @php
            $statusClass = 'bg-green-100 border-green-400 text-green-700';
            switch (session('status_type')) {
                case 'success':
                    $statusClass = 'bg-green-100 border-green-400 text-green-700';
                    break;
                case 'error':
                    $statusClass = 'bg-red-100 border-red-400 text-red-700';
                    break;
                case 'info':
                    $statusClass = 'bg-yellow-100 border-yellow-400 text-yellow-700';
                    break;
                default:
                    $statusClass = 'bg-gray-100 border-gray-400 text-gray-700';
                    break;
            }
        @endphp
        <div id="session-message" class="{{ $statusClass }} px-4 py-3 rounded relative ml-60" role="alert" style="z-index: 0;">
            <span class="block sm:inline">{{ session('status') }}</span>
            <span id="close-session-message" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
                <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.348 14.849a1 1 0 01-1.414 0L10 11.914l-2.934 2.935a1 1 0 01-1.414-1.414l2.935-2.935-2.935-2.935a1 1 0 011.414-1.414L10 9.086l2.934-2.935a1 1 0 011.414 1.414l-2.935 2.935 2.935 2.935a1 1 0 010 1.414z"/></svg>
            </span>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('close-session-message').addEventListener('click', function() {
                    document.getElementById('session-message').style.display = 'none';
                });
            });
        </script>
    @endif
    <div class="ml-60 mt-20 mb-20">
        @yield('content')
    </div>
</body>
</html>
