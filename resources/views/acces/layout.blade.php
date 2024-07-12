<!DOCTYPE html>
<head>
    <title>@yield('title', 'Mi jardin')</title>
    @vite(['resources/css/acces.css', 'resources/js/app.js'])
</head>
<body>
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