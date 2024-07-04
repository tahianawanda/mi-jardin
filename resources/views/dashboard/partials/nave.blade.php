<div class="panel-izquierdo">
    <h2>Bienvenido querido jardinero</h2>
    <a href="#">Perfil</a>
    <a href="#">Plantas</a>
    <a href="#">Historial</a>

    <!-- Formulario para cerrar sesión -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</div>
