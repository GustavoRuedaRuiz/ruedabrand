@extends('layouts.app')

@section('content')
<div class="container" style="font-family: system-ui;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5" style="align-items: center;display: flex;flex-direction: column;font-weight: bold;">Login</h1>
            <div>
                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group form-floating mb-3">
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                    <label for="floatingName">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('email') }}</span>
                                        <br>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group form-floating mb-3">
                                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Contraseña" >
                                    <label for="floatingName">Contraseña</label>
                                    @if ($errors->has('password'))
                                        <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('password') }}</span>
                                        <br>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <button id="buttomLogin" type="submit" class="btn">
                                    Login
                                </button>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-8" style="margin: 3%;">
                        <hr>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <p style="font-weight: bold;font-size: 125%;    display: flex;justify-content: center;">¿No tienes cuenta?</p>
                                <a id="buttomRegister" href="{{ route('register') }}" class="btn">
                                    Crear una cuenta
                                </a>
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
            var title =document.head.querySelector("title").innerHTML='Login - R🗲';
        </script>
@endsection
