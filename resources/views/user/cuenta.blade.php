@extends('layouts.app')

@section('content')
    <div class="contenido">
        <h1 class="mb-5 mt-4"><strong>HOLA, {{ Auth::user()->name }}</strong></h1>
        @hasrole('admin')
        <div style="min-width: 351px;width: 351px">
            <a href="{{route('listadoVentas')}}" style="text-decoration: none;color: initial">
                <h4>Ventas realizadas</h4>
                <p>Rastrea las ventas aquí.</p>
            </a>
            <hr>
        </div>
        @else
            <div style="min-width: 351px;width: 351px">
                <a href="{{route('listadoVentas')}}" style="text-decoration: none;color: initial">
                    <h4>Mis Pedidos</h4>
                    <p>Rastrea tus pedidos aquí.</p>
                </a>
                <hr>
            </div>
        @endhasrole
        <div style="min-width: 351px;width: 351px">
            <a href="{{route('detallesPersonales')}}" style="text-decoration: none;color: initial">
                <h4>Detalles Personales</h4>
                <p>Edite aquí sus datos personales, como la dirección de entrega por defecto y el nombre.</p>
            </a>
            <hr>
        </div>

        <div style="min-width: 351px;width: 351px">
            <a href="{{route('formcambiarPassword')}}" style="text-decoration: none;color: initial">
                <h4>Cambiar la contraseña</h4>
                <p>Cambie su contraseña aquí.</p>
            </a>
            <hr>
        </div>

        <div class="mt-5" style="min-width: 351px;width: 351px">
            <a href="{{ route('logout') }}" id="buttomLogin" class="btn" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        var title =document.head.querySelector("title").innerHTML='CUENTA - R🗲';
    </script>
@endsection
