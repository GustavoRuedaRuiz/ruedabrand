@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: system-ui;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="" style="align-items: center;display: flex;flex-direction: column;font-weight: bold;">AÑADIR STOCK AL PRODUCTO </h1>
                <div class="row mb-5 justify-content-center">
                    <div class="col-md-6">
                        <h2 style="text-align: center">{{$clothe->clothe_name}}</h2>
                    </div>
                </div>

                <div>
                    <div>
                        <form method="POST" action="{{ route('add_stock') }}">
                            @csrf
                            <input type="hidden" value="{{$clothe->clothe_name}}" name="clothe_name">
                            <input type="hidden" value="{{$clothe->id}}" name="clothe_id">

                            <input type="hidden" value="1" name="tallaS">
                            <input type="hidden" value="2" name="tallaM">
                            <input type="hidden" value="3" name="tallaL">
                            <input type="hidden" value="4" name="tallaXL">

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="number" class="form-control" name="unidadesTallaS" value="{{ old('unidadesTallaS') }}" placeholder="S">
                                        <label for="floatingName">Unidades talla S</label>
                                        @if ($errors->has('unidadesTallaS'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('unidadesTallaS') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="number" class="form-control" name="unidadesTallaM" value="{{ old('unidadesTallaM') }}" placeholder="M">
                                        <label for="floatingName">Unidades talla M</label>
                                        @if ($errors->has('unidadesTallaM'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('unidadesTallaM') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="number" class="form-control" name="unidadesTallaL" value="{{ old('unidadesTallaL') }}" placeholder="L">
                                        <label for="floatingName">Unidades talla L</label>
                                        @if ($errors->has('unidadesTallaL'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('unidadesTallaL') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3 justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="number" class="form-control" name="unidadesTallaXL" value="{{ old('unidadesTallaXL') }}" placeholder="XL">
                                        <label for="floatingName">Unidades talla XL</label>
                                        @if ($errors->has('unidadesTallaXL'))
                                            <span class="text-danger" style="float: left;text-align: left;">{{ $errors->first('unidadesTallaXL') }}</span>
                                            <br>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <button id="buttomLogin" type="submit" class="btn">
                                        Añadir Stock
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
                var title =document.head.querySelector("title").innerHTML='AÑADIR STOCK - R🗲';
            </script>
@endsection
