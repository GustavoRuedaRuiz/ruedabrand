@extends('layouts.app')

@section('content')
    @auth
        <div class="container" style="font-family: system-ui;">
            <div class="row">
                <div class="col-md-8">
                    <div>
                        @hasrole('admin')
                        <h1 class="mb-5" style="align-items: center;display: flex;flex-direction: column;font-weight: bold;">Listado Ventas</h1>
                        @else
                            <h1 class="mb-5" style="align-items: center;display: flex;flex-direction: column;font-weight: bold;">Mis Compras</h1>
                        @endhasrole
                        <div style="display: flex;align-items: center;">
                            @hasrole('admin')
                            <label style="margin-right: 4px"><b>Ventas entre</b></label>
                            @else
                            <label style="margin-right: 4px"><b>Compras entre</b></label>
                            @endhasrole
                            <input type="date" id="min" name="min">
                            <label style="margin-left: 4px;margin-right: 4px"><b>y</b></label>
                            <input type="date" id="max" name="max">
                            <button id="filter" class="btn btn-sm" style="background-color:navy;color: white;margin-left: 4px">Filtrar</button>
                        </div>

                        {{$dataTable->table()}}

                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection

@section('scripts')
    {{$dataTable->scripts()}}
    @auth
        @hasrole('admin')
    <script>
        var title =document.head.querySelector("title").innerHTML='LISTADO VENTAS - R🗲';
    </script>
    @else
        <script>
            var title =document.head.querySelector("title").innerHTML='LISTADO COMPRAS - R🗲';
        </script>
        @endhasrole
    @endauth
    <script>
        $(document).on("click", "#filter", function(e) {
            e.preventDefault();
            var start_date = $("#min").val();
            var end_date = $("#max").val();
            if (start_date == "" || end_date == "") {
                alert("Por favor, introduzca ambas fechas");
            } else {
                var arrayFechaInicio = start_date.split("-");

                var fechaInicio = new Date(arrayFechaInicio[0],arrayFechaInicio[1],arrayFechaInicio[2]);

                var arrayFechaFin = end_date.split("-");

                var fechaFin = new Date(arrayFechaFin[0],arrayFechaFin[1],arrayFechaFin[2]);

                document.querySelectorAll('td.fechaCompra').forEach(fecha => {
                    var arrayFecha = fecha.innerText.split("/");

                   var fechaCompra = new Date(arrayFecha[2],arrayFecha[1],arrayFecha[0]);

                   console.log(fechaCompra);
                    console.log(fechaInicio);
                  if (fechaCompra.getTime()>=fechaInicio.getTime() && fechaCompra.getTime()<=fechaFin.getTime()){
                      $(fecha).parent().css('display','table-row');
                   }
                  else {
                      $(fecha).parent().css('display','none');
                   }

                })
            }
        });
    </script>
@endsection
