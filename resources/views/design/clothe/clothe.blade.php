@extends('layouts.app')

@section('content')
    <div class="bg-light">
        <div class="container">
            @include('components.flash_alerts')
            @hasrole('admin')
            <a href="{{route('form_add_Stock',$clothe->clothe_name)}}" id="buttomLogin" style="width: 15%; min-width: 194px;font-size: 17px" class="btn mb-3">+ Añadir Stock</a>
            @endhasrole
            <div class="contenedorProducto">
                    <div id="carouselExampleControls" class="carousel slide carousel-fade mb-3" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="width: 100%;" src="{{$clothe->getMedia()->first() !== null ? $clothe->getMedia()->first()->getFullUrl('thumb') : 'https://brunosmoda.com/wp-content/uploads/2021/01/CAMISETA-NEGRA-LISA-HOMBRE-10043675_000-5.jpg'}}"  alt="...">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 100%;" src="{{$clothe->getMedia()->last() !== null ? $clothe->getMedia()->last()->getFullUrl('thumb') : 'https://brunosmoda.com/wp-content/uploads/2021/01/CAMISETA-NEGRA-LISA-HOMBRE-10043675_000-5.jpg'}}"  alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                <div class="infoProcuto">
                    <form method="POST" action="{{route('add_to_cart',[$clothe->clothe_name])}}">
                        @csrf
                        @method('GET')
                    <h1>{{$clothe->clothe_name}}</h1>
                    <p class="mb-5">{{$clothe->price}}€</p>
                    <div class="tallas" style="display: flex">
                        @foreach($typeSizes as $typeSize)
                            <p type="button" class="{{$typeSize->type_size_name}}" name="talla{{$typeSize->type_size_name}}" style="margin-right: 20px;font-size: 18px;padding-left:3px;background-color:transparent;border: none;margin-bottom: 5px"
                               @foreach($sizes as $size)
                                   @if($size->type_size_id == $typeSize->id)
                                        id="{{$size->stock}}"
                                    @endif
                                @endforeach
                                >{{$typeSize->type_size_name}}</p>
                       @endforeach
                    </div>
                   @if(isset($size))
                       @auth
                       @hasrole('admin')
                                <!-- Button trigger modal -->
                                <button style="width: 100%; min-width: 194px;font-size: 17px;margin-bottom: 15px" type="button" id="addToCart" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Añadir al carrito
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">¡Atención!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="text-align: left">
                                                <p>No puedes comprar productos siendo admin</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @else
                            <button type="submit" id="addToCart" style="width: 100%; min-width: 194px;font-size: 17px;margin-bottom: 15px" class="btn">Añadir al carrito</button>
                       @endhasrole
                        @endauth
                            @else
                        <button href="#" id="addToCart" style="width: 100%; min-width: 194px;font-size: 17px;margin-bottom: 15px" class="btn">Añadir al carrito</button>
                    @endif
                    @guest
                            <a href="{{route('login')}}" id="buttomLogin" style="width: 100%; min-width: 194px;font-size: 17px;margin-bottom: 15px" class="btn">Añadir al carrito</a>
                    @endguest
                    <hr>
                    <p>{{$clothe->description}}</p>
                    <ul>
                        <li>280 g/m², 80% algodón ring-spun y peinado, 20% poliéster</li>
                           <li>Tejido de 3 capas</li>
                            <li>Sisas, puños y bajo con tapa costura</li>
                            <li><a href="{{route('recomendacionesDeCuidado')}}">Guía de tallas y Recomendaciones de cuidado</a></li>
                    </ul>
                    </form>
                </div>
                </div>


            </div>
    </div>



            @endsection

            @section('scripts')

                <script>
                    var botonAddToCArt = document.querySelector("#addToCart")
                    var tallaS = document.querySelector(".S")
                    var tallaM = document.querySelector(".M")
                    var tallaL = document.querySelector(".L")
                    var tallaXL = document.querySelector(".XL")

                    var buttonS = document.createElement('input');
                    var buttonM = document.createElement('input');
                    var buttonL = document.createElement('input');
                    var buttonXL = document.createElement('input');

                    var tallas = document.querySelector(".tallas")

                    tallaS.classList.add("seleccionado")
                    if (!tallaS.id || tallaS.id==='0'){
                        botonAddToCArt.classList.add("agotado")
                        botonAddToCArt.innerHTML = "No disponible"

                    }
                    else{
                        botonAddToCArt.innerHTML = "Añadir al carrito"
                        botonAddToCArt.classList.remove("agotado")


                        buttonS.type = 'hidden';
                        buttonS.name = 'talla';
                        buttonS.value = 'S';
                        buttonS.className = 'btnS';



                        tallas.appendChild(buttonS);


                    }
                    tallaS.addEventListener("click", () => {
                        tallaS.classList.add("seleccionado")
                        tallaM.classList.remove("seleccionado")
                        tallaL.classList.remove("seleccionado")
                        tallaXL.classList.remove("seleccionado")
                        if (!tallaS.id ||tallaS.id==='0'){
                            botonAddToCArt.classList.add("agotado")
                            botonAddToCArt.innerHTML = "No disponible"

                        }
                        else{
                            botonAddToCArt.innerHTML = "Añadir al carrito"
                            botonAddToCArt.classList.remove("agotado")


                            if (document.querySelector('.btnM')){
                                buttonM.parentNode.removeChild(buttonM);
                            }

                            if(document.querySelector('.btnL')){
                                buttonL.parentNode.removeChild(buttonL);
                            }

                            if (document.querySelector('.btnXL')){
                                buttonXL.parentNode.removeChild(buttonXL);
                            }


                            buttonS.type = 'hidden';
                            buttonS.name = 'talla';
                            buttonS.value = 'S';
                            buttonS.className = 'btnS';



                            tallas.appendChild(buttonS);

                        }
                    })

                    tallaM.addEventListener("click", () => {
                        tallaM.classList.add("seleccionado")
                        tallaS.classList.remove("seleccionado")
                        tallaL.classList.remove("seleccionado")
                        tallaXL.classList.remove("seleccionado")
                        if (!tallaM.id||tallaM.id==='0'){
                            botonAddToCArt.classList.add("agotado")
                            botonAddToCArt.innerHTML = "No disponible"

                        }
                        else{
                            botonAddToCArt.innerHTML = "Añadir al carrito"
                            botonAddToCArt.classList.remove("agotado")




                            if(document.querySelector('.btnS')){
                                buttonS.parentNode.removeChild(buttonS);
                            }


                            if(document.querySelector('.btnL')){
                                buttonL.parentNode.removeChild(buttonL);
                            }

                            if (document.querySelector('.btnXL')){
                                buttonXL.parentNode.removeChild(buttonXL);
                            }

                            buttonM.type = 'hidden';
                            buttonM.name = 'talla';
                            buttonM.value = 'M';
                            buttonM.className = 'btnM';



                            tallas.appendChild(buttonM);
                        }
                    })

                    tallaL.addEventListener("click", () => {
                        tallaL.classList.add("seleccionado")
                        tallaS.classList.remove("seleccionado")
                        tallaM.classList.remove("seleccionado")
                        tallaXL.classList.remove("seleccionado")
                        if (!tallaL.id||tallaL.id==='0'){
                            botonAddToCArt.classList.add("agotado")
                            botonAddToCArt.innerHTML = "No disponible"

                        }
                        else{
                            botonAddToCArt.innerHTML = "Añadir al carrito"
                            botonAddToCArt.classList.remove("agotado")


                            if (document.querySelector('.btnM')){
                                buttonM.parentNode.removeChild(buttonM);
                            }

                            if(document.querySelector('.btnS')){
                                buttonS.parentNode.removeChild(buttonS);
                            }

                            if (document.querySelector('.btnXL')){
                                buttonXL.parentNode.removeChild(buttonXL);
                            }

                            buttonL.type = 'hidden';
                            buttonL.name = 'talla';
                            buttonL.value = 'L';
                            buttonL.className = 'btnL';



                            tallas.appendChild(buttonL);
                        }
                    })

                    tallaXL.addEventListener("click", () => {
                        tallaXL.classList.add("seleccionado")
                        tallaS.classList.remove("seleccionado")
                        tallaL.classList.remove("seleccionado")
                        tallaM.classList.remove("seleccionado")
                        if (!tallaXL.id||tallaXL.id==='0'){
                            botonAddToCArt.classList.add("agotado")
                            botonAddToCArt.innerHTML = "No disponible"

                        }
                        else{
                            botonAddToCArt.innerHTML = "Añadir al carrito"
                            botonAddToCArt.classList.remove("agotado")


                            if (document.querySelector('.btnM')){
                                buttonM.parentNode.removeChild(buttonM);
                            }

                            if(document.querySelector('.btnL')){
                                buttonL.parentNode.removeChild(buttonL);
                            }

                            if (document.querySelector('.btnS')){
                                buttonS.parentNode.removeChild(buttonS);
                            }

                            buttonXL.type = 'hidden';
                            buttonXL.name = 'talla';
                            buttonXL.value = 'XL';
                            buttonXL.className = 'btnXL';



                            tallas.appendChild(buttonXL);
                        }
                    })

                </script>


                <script>
                    var title =document.head.querySelector("title").innerHTML='{{$clothe->clothe_name}} - R🗲';
                </script>
@endsection
