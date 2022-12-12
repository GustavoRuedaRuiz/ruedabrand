@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: system-ui;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    <h1 class="mb-5" style="align-items: center;display: flex;flex-direction: column;font-weight: bold;">Añadir Admin</h1>

                    <div>
                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electrónico">
                                        <label for="floatingName">Correo electrónico</label>
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
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre" >
                                        <label for="floatingName">Nombre</label>
                                        @if ($errors->has('name'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('name') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" class="form-control" name="surname" value="{{ old('surname') }}" placeholder="Apellidos">
                                        <label for="floatingName">Apellidos</label>
                                        @if ($errors->has('surname'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('surname') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Contraseña" >
                                        <label for="floatingPassword">Contraseña</label>
                                        @if ($errors->has('password'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('password') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password">
                                        <label for="floatingConfirmPassword">Confirmar Contraseña</label>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('password_confirmation') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <button id="buttomLogin" type="submit" class="btn">Crear Cuenta</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var title =document.head.querySelector("title").innerHTML='AÑADIR ADMIN - R🗲';
    </script>
@endsection
