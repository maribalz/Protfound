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
@php $i=0; @endphp

<div class="contenedor margen-top">
    <div class="row">
        <div class="col s12 migas">
            <a href="{{route('familias')}}">Productos</a> | <a href="{{route('productos',$familia->id)}}">{{$familia->nombre}}</a> | {{$producto->nombre}}
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
                                <li class="@if($pro->id==$producto->id) activopro @endif">
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
                <div class="col m12 l5">
                    @foreach($galerias as $galeria)
                        @if($i==0)
                            <div class="center height hide-on-small-only">
                                <img class="responsive-img" id="producto" src="{{asset($galeria->imagen)}}" alt="">
                            </div>
                            @php $i++; @endphp
                        @endif
                    @endforeach
                    <div class="row" style="margin-top: 10px;">
                        @foreach($galerias as $galeria)
                            <div class="col s12 m4">
                                <div class="center height-mini">
                                    <img class="responsive-img" src="{{asset($galeria->imagen)}}" alt="" onclick="actualizar('{{asset($galeria->imagen)}}')">
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="col m12 l7">
                    <span class="titulopro">{{$producto->nombre}}</span>
                    <div class="textopro">
                        {!!$producto->descripcion!!}
                    </div>
                    <div style="margin-bottom: 32px;">
                    <a href="{{asset($producto->ficha)}}" target="_blank" class="btnficha" style="padding-left: 52px;padding-right: 52px;">Descargar Ficha</a></div>
                    <div>
                    <a href="{{route('presupuesto')}}" class="btnficha">SOLICITAR PRESUPUESTO</a></div>
                </div>
            
            </div>
            <div class="row">
                <div class="s12">
                    <div class="textotab">
                        {!!$producto->texto!!}
                    </div>
                </div>
                <div class="col s12 fondovideo">
                    <div class="row" style="margin-bottom: 0px; display: flex;align-items: center;">
                        <div class="col s6">
                            {{$producto->texto_video}}
                        </div>
                        <div class="col s6">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{$producto->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>

</div>

@include('pages.template.footer')


    <script src="{{ asset('js/materialize.min.js')}}"></script>
    <script>

    function actualizar(imagen){

      document.getElementById('producto').src = imagen;

    }

  </script>

</body>
</html>