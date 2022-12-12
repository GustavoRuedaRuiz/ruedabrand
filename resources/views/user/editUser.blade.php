@extends('layouts.app')

@section('content')
    <div class="contenido">
        <h1 class="mb-5 mt-4" style="align-items: center;display: flex;flex-direction: column;font-weight: bold;">EDITAR USUARIO</h1>
        <div>
            <div>
                <form method="POST" action="{{ route('update',$user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group form-floating mb-3">
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email" required="required">
                                <label for="floatingName">Email</label>
                                @if ($errors->has('email'))
                                    <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('email') }}</span>
                                    <br>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group form-floating mb-3">
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Nombre" required="required">
                                <label for="floatingName">Nombre</label>
                                @if ($errors->has('name'))
                                    <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('name') }}</span>
                                    <br>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group form-floating mb-3">
                                <input type="text" class="form-control" name="surname" value="{{ $user->surname }}" placeholder="Apellidos" required="required">
                                <label for="floatingName">Apellidos</label>
                                @if ($errors->has('surname'))
                                    <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('surname') }}</span>
                                    <br>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <button id="buttomLogin" type="submit" class="btn">
                                Guardar Cambios
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        var title =document.head.querySelector("title").innerHTML='Editar Usuario - R🗲';
    </script>
@endsection
