@extends('layouts.app')

@section('content')
    <div class="contenido">
        <h1 class="mb-4 mt-4"><strong>RECOMENDACIONES DE CUIDADO</strong></h1>
        <p>Para que tus prendas y los estampados duren el mayor tiempo posible te recomendamos:</p>
        <ul>
            <li>Lavar en lavadora a máximo 40º - Preferiblemente en agua fría</li>
            <li>No lavar en seco</li>
            <li>No usar lejía</li>
            <li>Lavar y tender la prenda del revés</li>
            <li>No usar secadora</li>
            <li>No planchar sobre el estampado</li>
        </ul>
    </div>
@endsection

@section('scripts')
    <script>
        var title =document.head.querySelector("title").innerHTML='RECOMENDACIONES DE CUIDADO - R🗲';
    </script>
@endsection
