<!DOCTYPE html>

<html lang="es">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Protfund</title>  
    <link rel="icon" type="image/png" href="{{ asset('imagenes/logos/favicon.png') }}"/>
    <meta name="keywords" content="{{ $metadato->keywords }}">
    <meta name="description" content="{{ $metadato->description }}">
    <script type="text/javascript" src="{{ asset('js/jquery-2.2.0.min.js') }}"></script> 

    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/materialize.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/inicio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/productos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
</head>

<body>

@include('pages.template.header')

<div class="contenedor margen-top">
    <div class="row">
        <div class="col s12 migas">
            <a href="{{route('familias')}}">Productos</a> | {{$familia->nombre}}
        </div>
    </div>
    <div class="row">
        <div class="col m12 l3 ">
            <ul class="menuleft">
                @foreach($familias as $fam)
                    <a href="{{route('productos',$fam->id)}}">
                        <li class="@if($fam->id==$familia->id) activofam @endif">
                            {{$fam->nombre}} <i class="material-icons">arrow_drop_down</i>
                        </li>
                    </a>
                    @if($fam->id==$familia->id) 
                    <ul class="submenu">
                        @foreach($productos as $pro)
                            <a href="{{route('productoind',$pro->id)}}">
                                <li>
                                    {{$pro->nombre}}
                                </li>
                            </a>
                        @endforeach
                    </ul>
                    @endif

                @endforeach
            </ul>
        </div>
        <div class="col m12 l9">
            <div class="row rowproductos">
            @foreach($productos as $pro)
                  <div class="col m12 l4">
                      <a href="{{route('productoind',$pro->id)}}">
                          <div class="probox">
                              <img src="{{asset($pro->imagen)}}" class="responsive-img">
                          </div>
                          <div class="nompro">
                              {{$pro->nombre}}
                          </div>
                      </a>
                  </div>  
            @endforeach
            </div>
            
        </div>
        
    </div>

</div>

@include('pages.template.footer')


    <script src="{{ asset('js/materialize.min.js')}}"></script>

</body>
</html>