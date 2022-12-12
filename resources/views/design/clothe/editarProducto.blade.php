@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: system-ui;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5" style="align-items: center;display: flex;flex-direction: column;font-weight: bold;">EDITAR PRODUCTO</h1>
                <div>
                    <div>
                        <form method="POST" action="{{route('clothe.update',$clothe->clothe_name)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" value="{{$collection_name}}" name="collection_name">
                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="mb-4">Seleccione  la imagen del producto por delante  </div>
                                    <input id="avatar" type="file" class="form-control" name="avatar1">
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="mb-4">Seleccione la imagen del producto por detras </div>
                                    <input id="avatar" type="file" class="form-control" name="avatar2">
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" class="form-control" name="clothe_name" value="{{ $clothe->clothe_name }}" placeholder="Nombre del producto" >
                                        <label for="floatingName">Nombre del producto</label>
                                        @if ($errors->has('clothe_name'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('clothe_name') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" class="form-control" name="price" value="{{$clothe->price }}" placeholder="Precio del producto">
                                        <label for="floatingName">Precio</label>
                                        @if ($errors->has('price'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('price') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" class="form-control" name="description" value="{{ $clothe->description }}" placeholder="Descripción del producto">
                                        <label for="floatingName">Escriba una breve descripción del producto</label>
                                        @if ($errors->has('description'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('description') }}</span>
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
                var title =document.head.querySelector("title").innerHTML='EDITAR PRODUCTO - R🗲';
            </script>
@endsection
