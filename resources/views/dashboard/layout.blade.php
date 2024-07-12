<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Mi Jardin')</title>
    @vite(['resources/css/dashboard.css','resources/css/nav.css', 'resources/js/app.js'])
</head>
<body>
    @include('dashboard.partials.nave')
    <div class="container">
        @if(session('status'))  
            <div class="notification">
                <div class="status">
                    {{ session('status') }}
                </div>
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>
