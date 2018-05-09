<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <title>Airdin</title>  

    <link rel="icon" type="image/png" href="{{ asset('imagenes/logos/favicon.png') }}"/>

    <meta name="keywords" content="{{ $metadato->keywords }}">

    <meta name="description" content="{{ $metadato->description }}">

    <script type="text/javascript" src="{{ asset('js/jquery-2.2.0.min.js') }}"></script> 

 <!-- Bootstrap-->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/materialize.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/materialize.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/inicio.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    



</head>

<body>

@include('pages.template.header')

@php

    $i=0;

@endphp

<div class="container margen-top">

    <div class="row">

        <div class="col s12 m5">

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

        <div class="col s12 m7">

            <div class="titulo-pro">{{$producto->{"nombre_".$idioma} }}</div>

            <div class="contenido">

                {!!$producto->{"contenido_".$idioma} !!}

            </div>

            <div class="button">

                <a href="">

                    @if($idioma == 'es')

                        Descargar PDF

                    @else

                        @if($idioma == 'en')

                            DOWNLOAD PDF

                        @else

                            BAIXAR PDF

                        @endif

                    @endif

                </a>

            </div>

        </div>

    </div>

    <div class="row">
        <ul id="tabs-swipe-demo" class="tabs">
            @php
            $i=0;
            @endphp
                @foreach($modelos as $modelo)
                    <li class="tab col s4"><a class="@if($i==0) active @endif" href="{{'#test-swipe-'.$modelo->id}}">{{$modelo->{"titulo_".$idioma} }}</a></li>
                    @php $i++; @endphp
                @endforeach
        </ul>
        @foreach($modelos as $modelo)
          <div id="{{'test-swipe-'.$modelo->id}}" class="col s12 marg">{!! $modelo->{"contenido_".$idioma } !!}</div>
        @endforeach
    </div>

</div>

@include('pages.template.footer')

    <script>

    function actualizar(imagen){

      document.getElementById('producto').src = imagen;

    }

  </script>

   <script src="{{ asset('js/materialize.js')}}"></script> 

   <script>

         $(document).ready(function(){

    $('.tabs').tabs();

  });

   </script>

    <script src="{{ asset('js/materialize.min.js')}}"></script>

</body>



</html>