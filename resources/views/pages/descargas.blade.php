<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tubulón</title>  
    <link rel="icon" type="image/png" href="{{ asset('imagenes/logos/favicon.png') }}"/>
    <meta name="keywords" content="{{ $metadato->keywords }}">
    <meta name="description" content="{{ $metadato->description }}">
    <script type="text/javascript" src="{{ asset('js/jquery-2.2.0.min.js') }}"></script> 
 <!-- Bootstrap-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/descargas.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> 
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

</head>
<body>
@include('pages.template.header')


<div class="container margen-top">
  <div class="row ">
    <div class="col-xs-12 descargas">
      DESCARGAS
      <div class="lineatit"></div>
    </div>
  </div>
  <div class="row margenrow">
    @foreach($descargas as $descarga)
      <div class="col-xs-12 col-sm-3 margendescar">
          <div class="box-descarga">
              <div class="imgbox">
                <img src="{{$descarga->imagen}}"  class="img-responsive">
              </div>
              <div class="nombre">
                  {{$descarga->nombre}}
              </div>
          </div>
          <div class="titulo">
            {{$descarga->titulo}}
          </div>
          <div class="botones">
              <a href="{{asset($descarga->archivo)}}" download>
                <div class="desc">
                  <img src="{{asset('imagenes/descarga.png')}}">
                </div>
              </a>
              <a href="{{asset($descarga->archivo)}}" target="_blank">
                <div class="ver">
                  <img src="{{asset('imagenes/ver.png')}}">
                </div>
              </a>
          </div>
      </div>
    @endforeach
  </div>
</div>

@include('pages.template.footer')
  
</body>

</html>