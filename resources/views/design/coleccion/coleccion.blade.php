@extends('layouts.app')

@section('content')
    <div class="bg-light">
        <div class="container">
            <h1 class="mb-5">{{$collection_name}}</h1>
            @include('components.flash_alerts')
            @hasrole('admin')
            <a href="{{route('form_add_Clothe',$collection_name)}}" id="buttomLogin" style="width: 15%; min-width: 194px;font-size: 17px" class="btn mb-3">+ Añadir Producto</a>
            @endhasrole
            <div class="row">
                @foreach ($clothes as $clothe)
                    @if($clothe->trashed())
                        @hasrole('admin')
                        <div class="col-sm-4" id="{{$clothe->id}}" style="margin-bottom:10px;">
                            <a class="imagen"  href="{{route('clothe',$clothe->clothe_name)}}" style="position: relative;">
                                <img style="width: 100%;height:100%;" id="{{$clothe->id}}d" onmouseover="porEncima(this)" onmouseout="normalImg(this)" class="porDelante" src="{{$clothe->getMedia()->first() !== null ? $clothe->getMedia()->first()->getFullUrl('thumb') : 'https://brunosmoda.com/wp-content/uploads/2021/01/CAMISETA-NEGRA-LISA-HOMBRE-10043675_000-5.jpg'}}">
                                <span style="display: none" class="{{$clothe->getMedia()->last() !== null ? $clothe->getMedia()->last()->getFullUrl('thumb') : 'https://brunosmoda.com/wp-content/uploads/2021/01/CAMISETA-NEGRA-LISA-HOMBRE-10043675_000-5.jpg'}}" id="{{$clothe->id}}a"></span>

                                <div class="mt-2">
                                    <div>
                                        <h1 class="name" style="font-size: 20px">{{$clothe->clothe_name}}</h1>
                                        <p>{{$clothe->price}}€</p>
                                    </div>
                                </div>
                            </a>
                            <div style="position:absolute;top:2%;left: 68%;width: 27%;background-color: white;border-radius: 10px;">
                                <div style="display: flex;justify-content: space-between;align-items: center;">
                                    <a href="{{route('editClothe',[$clothe->clothe_name,$collection_name])}}" style="padding-left: 9px;padding-bottom: 3px;"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.599548 17.6031C0.745878 17.1673 0.895992 16.7332 1.03812 16.2962C1.45328 15.0229 1.86648 13.7489 2.27771 12.4742C2.28781 12.4432 2.30168 12.4135 2.30631 12.4013L5.8876 15.9702C5.84765 15.984 5.78332 16.0079 5.7194 16.0288C4.07978 16.5557 2.43988 17.0823 0.7997 17.6086C0.754175 17.6264 0.709799 17.6469 0.666825 17.6702L0.599548 17.6031Z" fill="navy"/>
                                            <path d="M7.15172 14.7261L3.55109 11.1358L11.9095 2.80681L15.5123 6.39453C12.7345 9.16264 9.94768 11.9398 7.15172 14.7261Z" fill="navy"/>
                                            <path d="M16.7724 5.15211L13.1983 1.59036C13.4712 1.29956 13.7344 0.979421 14.0393 0.706633C14.3214 0.455216 14.744 0.486224 15.0426 0.726746C15.1032 0.775999 15.1612 0.828452 15.2162 0.883882C15.9599 1.62389 16.7028 2.36417 17.4448 3.10474C17.912 3.5707 17.9124 4.01612 17.4448 4.48083C17.2219 4.70543 16.9978 4.92919 16.7724 5.15211Z" fill="navy"/>
                                        </svg></a>
                                    <a  alt="Restaurar" href="{{route('restoreClothe',[$clothe->id,$collection_name])}}" style="padding-right:11px;padding-bottom: 3px;color: red;text-decoration: none;font-size:22px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" x="0" y="0" viewBox="0 0 489.533 489.533" >
                                            <g>
                                                <path d="M268.175,488.161c98.2-11,176.9-89.5,188.1-187.7c14.7-128.4-85.1-237.7-210.2-239.1v-57.6c0-3.2-4-4.9-6.7-2.9
                                                                        l-118.6,87.1c-2,1.5-2,4.4,0,5.9l118.6,87.1c2.7,2,6.7,0.2,6.7-2.9v-57.5c87.9,1.4,158.3,76.2,152.3,165.6
                                                                        c-5.1,76.9-67.8,139.3-144.7,144.2c-81.5,5.2-150.8-53-163.2-130c-2.3-14.3-14.8-24.7-29.2-24.7c-17.9,0-31.9,15.9-29.1,33.6
                                                                        C49.575,418.961,150.875,501.261,268.175,488.161z" fill="#e9bd15" class="">
                                                </path>
                                            </g>

                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endhasrole
                    @else
                    <div class="col-sm-4" id="{{$clothe->id}}" style="margin-bottom:10px;">
                        <a class="imagen"  href="{{route('clothe',$clothe->clothe_name)}}" style="position: relative;">
                            <img style="width: 100%;height:100%;" id="{{$clothe->id}}d" onmouseover="porEncima(this)" onmouseout="normalImg(this)" class="porDelante" src="{{$clothe->getMedia()->first() !== null ? $clothe->getMedia()->first()->getFullUrl('thumb') : 'https://brunosmoda.com/wp-content/uploads/2021/01/CAMISETA-NEGRA-LISA-HOMBRE-10043675_000-5.jpg'}}">
                            <span style="display: none" class="{{$clothe->getMedia()->last() !== null ? $clothe->getMedia()->last()->getFullUrl('thumb') : 'https://brunosmoda.com/wp-content/uploads/2021/01/CAMISETA-NEGRA-LISA-HOMBRE-10043675_000-5.jpg'}}" id="{{$clothe->id}}a"></span>

                        <div class="mt-2">
                            <div>
                                <h1 class="name" style="font-size: 20px">{{$clothe->clothe_name}}</h1>
                                <p>{{$clothe->price}}€</p>
                            </div>
                        </div>
                        </a>
                        @hasrole('admin')
                        <div style="position:absolute;top:2%;left: 68%;width: 27%;background-color: white;border-radius: 10px;">
                            <div style="display: flex;justify-content: space-between;align-items: center;">
                                <a href="{{route('editClothe',[$clothe->clothe_name,$collection_name])}}" style="padding-left: 9px;padding-bottom: 3px;"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.599548 17.6031C0.745878 17.1673 0.895992 16.7332 1.03812 16.2962C1.45328 15.0229 1.86648 13.7489 2.27771 12.4742C2.28781 12.4432 2.30168 12.4135 2.30631 12.4013L5.8876 15.9702C5.84765 15.984 5.78332 16.0079 5.7194 16.0288C4.07978 16.5557 2.43988 17.0823 0.7997 17.6086C0.754175 17.6264 0.709799 17.6469 0.666825 17.6702L0.599548 17.6031Z" fill="navy"/>
                                        <path d="M7.15172 14.7261L3.55109 11.1358L11.9095 2.80681L15.5123 6.39453C12.7345 9.16264 9.94768 11.9398 7.15172 14.7261Z" fill="navy"/>
                                        <path d="M16.7724 5.15211L13.1983 1.59036C13.4712 1.29956 13.7344 0.979421 14.0393 0.706633C14.3214 0.455216 14.744 0.486224 15.0426 0.726746C15.1032 0.775999 15.1612 0.828452 15.2162 0.883882C15.9599 1.62389 16.7028 2.36417 17.4448 3.10474C17.912 3.5707 17.9124 4.01612 17.4448 4.48083C17.2219 4.70543 16.9978 4.92919 16.7724 5.15211Z" fill="navy"/>
                                    </svg></a>
                                @method('DELETE')
                                <a href="{{route('destroyClothe',[$clothe->id,$collection_name])}}" style="padding-right:11px;color: red;text-decoration: none;font-size:22px">X</a>
                            </div>
                        </div>
                        @endhasrole
                    </div>
                    @endif
                @endforeach
            </div>
@endsection

@section('scripts')
     <script>
          var title =document.head.querySelector("title").innerHTML='{{$collection_name}} - R🗲';
     </script>

     <script>
         function porEncima(x) {
             var id = x.id;
             var idSpan = id.substring(0,id.length-1)+'a';
             var span = document.getElementById(idSpan);
             console.log(idSpan);
             var clasSpan = span.className;
             span.className = x.src;
             x.src = clasSpan;


         }

         function normalImg(x) {
             var id = x.id;
             var idSpan = id.substring(0,id.length-1)+'a';
             var span = document.getElementById(idSpan);
             var clasSpan = span.className;
             span.className = x.src;
             x.src = clasSpan;
         }
     </script>
@endsection
