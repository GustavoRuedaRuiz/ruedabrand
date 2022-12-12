<nav class="navbar navbar-expand d-flex flex-column align-items-center" style="font-family: system-ui;" id="sidebar">
    <ul class="navbar-nav d-flex flex-colum w-100">
        <li class="nav-item w-100">
            <a href="{{ route('home') }}" class="nav-link text-light pl-"><strong>Home</strong></a>
        </li>
        @auth
        @hasrole('admin')
        <li class="nav-item w-100">
            <a href="{{route('create_admin')}}" class="nav-link text-light pl-4"><strong>Añadir admin</strong></a>
        </li>

        <li class="nav-item w-100">
            <a href="{{route('listadoUsuarios')}}" class="nav-link text-light pl-4"><strong>Listado Usuarios</strong></a>
        </li>

        <li class="nav-item w-100">
            <a href="{{route('listadoVentas')}}" class="nav-link text-light pl-4"><strong>Listado Ventas</strong></a>
        </li>
        @else
            <li class="nav-item w-100">
                <a href="{{route('listadoVentas')}}" class="nav-link text-light pl-4"><strong>Mis pedidos</strong></a>
            </li>

            <li class="nav-item w-100">
                <a href="{{route('cart')}}" class="nav-link text-light pl-4"><strong>Carrito</strong></a>
            </li>
        @endhasrole
        @endauth
        @guest
        @if (Route::has('login'))
        <li class="nav-item w-100">
            <a href="{{ route('login') }}" class="nav-link text-light pl-4"><strong>Login</strong></a>
        </li>
        @endif
        @if (Route::has('register'))
        <li class="nav-item w-100">
            <a href="{{ route('register') }}" class="nav-link text-light pl-4"><strong>Registrarse</strong></a>
        </li>
        @endif
        @else
            <li class="nav-item w-100">
                <a href="{{ route('logout') }}" class="nav-link text-light pl-4"
                   onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"><strong>Cerrar Sesión</strong></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @endguest
    </ul>
</nav>
