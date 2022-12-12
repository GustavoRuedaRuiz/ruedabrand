@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: system-ui;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5" style="align-items: center;display: flex;flex-direction: column;font-weight: bold;">EDITAR COLECCIÓN</h1>
                <div>
                    <div>
                        <form method="POST" action="{{route('collection.update',$collection_name)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="mb-4">Seleccione la portada de la colección </div>
                                    <input id="avatar" type="file" class="form-control" name="avatar">
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" class="form-control" name="collection_name" value="{{ $collection_name }}" placeholder="Nombre de la colección">
                                        <label for="floatingName">Nombre de la colección</label>
                                        @if ($errors->has('collection_name'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('collection_name') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <button id="buttomLogin" type="submit" class="btn">
                                        Guardar cambios
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('scripts')
            <script>
                var title =document.head.querySelector("title").innerHTML='EDITAR COLECCIÓN - R🗲';
            </script>
@endsection
