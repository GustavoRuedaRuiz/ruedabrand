@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: system-ui;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5" style="align-items: center;display: flex;flex-direction: column;font-weight: bold;">RECUPERACIÓN DE CONTRASEÑA</h1>
                <div>
                    <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group form-floating mb-3">
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required="required">
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
                                <button id="buttomLogin" type="submit" class="btn">
                                    Enviar petición
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
