@extends('layouts.app')

@section('content')
    <div class="contenido">
        <h1 class="mb-4 mt-4"><strong>CONTACTO</strong></h1>
        <p>Escríbenos a hello@ruedabrand.com</p>
        <p>Nos pondremos en contacto contigo en un plazo máximo de 48 horas (laborables) para poder resolver tus dudas.</p>
    </div>
@endsection

@section('scripts')
    <script>
        var title =document.head.querySelector("title").innerHTML='CONTACTO - R🗲';
    </script>
@endsection
