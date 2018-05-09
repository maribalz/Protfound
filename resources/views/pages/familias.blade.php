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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/inicio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> 
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

</head>
<body>
@include('pages.template.header')
<div class="container margen-top">
  <div class="row">
      <div class="col-xs-12">
        <div class="nuestros">
          NUESTRAS<br>
          LÍNEAS <br>
          DE PRODUCTOS <br>
          <div class="lineatitle"></div>
        </div>
      </div>
  </div>
  <div class="row margenes"> 
  @foreach($productos as $producto)
    <div class="col-xs-12 col-md-4" style="margin-bottom: 2%;">
      <a href="{{route('productos',$producto->id)}}">
        <div class="img-dest">
            <img src="{{asset($producto->imagen)}}" class="img-responsive">
            <div class="nom-dest" style="color: #{{$producto->color}};">
                {{$producto->nombre}}
            </div>
            <div class="capa">+ <br> Ingresar</div>
        </div>
      </a>
    </div>
  @endforeach
  </div>
</div>
@include('pages.template.footer')
  
</body>

</html>