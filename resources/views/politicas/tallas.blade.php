@extends('layouts.app')

@section('content')
    <div class="contenido">
        <h1 class="mb-4 mt-4"><strong>TALLAS</strong></h1>
        <img style="max-width: 100%;height: auto;" src="https://www.payperwear.com/flex/tmp/imgResized/T-42e6c465f85864e6ead7f220147d5e8e-3508x1832.jpg" alt="Guia de tallas camisetas">
        <p class="mt-3"><b>El margen de tolerancia productivo, en relación con las dimensiones de la talla, puede ser del +/-3 %. </b></p>
        <p><b>Los productos de algodón pueden sufrir una variación dimensional de hasta un 5 % tras su lavado, incluso si dicho lavado se realiza correctamente y de acuerdo con las instrucciones indicadas en la etiqueta interna.</b></p>
    </div>
@endsection

@section('scripts')
    <script>
        var title =document.head.querySelector("title").innerHTML='TALLAS - R🗲';
    </script>
@endsection
