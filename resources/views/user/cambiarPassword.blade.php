@extends('layouts.app')

@section('content')
    <div class="contenido">
        <h1 class="mb-5 mt-4" style="align-items: center;display: flex;flex-direction: column;font-weight: bold;">CAMBIAR CONTRASEÑA </h1>
        <div>
            <div>
                <form method="POST" action="{{ route('cambiarPassword') }}">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group form-floating mb-3">
                                <input type="password" class="form-control" name="oldPassword" value="{{ old('oldPassword') }}" placeholder="Contraseña anterior" required="required">
                                <label for="floatingName">Contraseña anterior</label>
                                @if ($errors->has('oldPassword'))
                                    <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('oldPassword') }}</span>
                                    <br>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group form-floating mb-3">
                                <input type="password" class="form-control" name="newPassword" value="{{ old('newPassword') }}" placeholder="Contraseña nueva" required="required">
                                <label for="floatingName">Contraseña nueva</label>
                                @if ($errors->has('newPassword'))
                                    <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('newPassword') }}</span>
                                    <br>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group form-floating mb-3">
                                <input type="password" class="form-control" name="newPassword" value="{{ old('confirmNewPassword') }}" placeholder="Confirmar contraseña nueva" required="required">
                                <label for="floatingName">Confirmar contraseña nueva</label>
                                @if ($errors->has('confirmNewPassword'))
                                    <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('confirmNewPassword') }}</span>
                                    <br>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <button id="buttomLogin" type="submit" class="btn">
                                Cambiar contraseña
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
        var title =document.head.querySelector("title").innerHTML='CAMBIAR CONTRASEÑA - R🗲';
    </script>

@endsection
