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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">


</head>

<body>

@include('pages.template.header')

<div class="contenedor margen-top">

    <div class="row" style="margin-bottom: 26px;">

      <div class="col s12  titledestacados"  style="margin-top: 0px; text-align: left;">
            <span>Productos</span>
      </div>

        

    </div>

    <div class="row">

        @foreach($productos as $producto)

          <div class="col m12 l4" style="margin-bottom: 40px;">

            <a href="{{route('productos',$producto->id)}}">

              <div class="border">

                <img class="responsive-img" src="{{asset($producto->imagen)}}" alt="{{$producto->{'nombre'} }}">
              </div>
              <div class="nom-pro">
                  {{$producto->{'nombre'} }}

              </div>

            </a>

            

          </div>

        @endforeach

    </div>

</div>
@include('pages.template.footer')

  

</body>



</html>