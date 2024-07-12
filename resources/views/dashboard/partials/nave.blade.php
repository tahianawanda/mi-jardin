<div class="panel-izquierdo">
    <h2>Bienvenido querido jardinero</h2>
    <ul>
        <li><a href="{{ route('profile') }}">Perfil</a></li>
        <li><a href="{{ route('plants') }}">Plantas</a></li>
        <li><a href="{{ route('history') }}">Historial</a></li>
    </ul>

    <!-- Formulario para cerrar sesión -->
    @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    @endauth
</div>
