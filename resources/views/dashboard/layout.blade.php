<!DOCTYPE html>
<html>
<head>
   <title> @yield('title', 'Mi Jardin') </title> 
   <style>
        .active a {
            color: red;
            text-decoration: none;
        }
   </style>
</head>
<body>
    @include('partials.nav')
    @yield('content')
</body>

</html>