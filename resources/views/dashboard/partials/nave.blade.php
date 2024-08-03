<div class="flex">
    <div class="bg-gray-800 text-white fixed top-0 left-0 w-60 h-full px-8 py-6 shadow-md overflow-y-auto z-50">
        <h2 class="text-center text-3xl mb-6">Bienvenido querido jardinero</h2>
        <ul class="text-lg">
            <li class="mb-4">
                <a href="{{ route('profile.show') }}" class="block py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Perfil</a>
            </li>
            <li class="mb-4">
                <a href="{{ route('plant.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Plantas</a>
            </li>
            <li class="mb-4">
                <a href="{{ route('history.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Historial</a>
            </li>
            <li class="mb-4">
                <a href="{{ route('explore.show') }}" class="block py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Explorar</a>
            @if(auth()->user()->hasRole('admin'))
                </li><li class="mb-4">
                    <a href="{{ route('user.show') }}" class="block py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Usuarios</a>
                </li>
            @endif
        </ul>
        @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
        @endauth
    </div>
</div>