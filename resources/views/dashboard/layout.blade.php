<!DOCTYPE html>
<html>
<head>
   <title> @yield('title', 'Mi Jardin') </title> 
   <link rel="stylesheet" href="/css/styledashboard.css">
</head>
<body>
    @include('dashboard.partials.nave')
    <div class="contenido-derecho">
        @yield('content')
    </div>
</body>

</html>