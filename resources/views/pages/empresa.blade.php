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

<div class="carousel carousel-slider">
  @foreach($sliders as $slider)
    <a class="carousel-item" href="#one!"><img class="responsive-img" src="{{asset($slider->imagen)}}">
    @if($slider->{"texto_".$idioma})
    <div class="caja-slideremp">
      {!! $slider->{"texto_".$idioma} !!}
    </div>
    @endif
    </a>

  @endforeach
    
</div>

<div class="contenedor margen-top margenfoot">
  <div class="row ">
    <div class="col s12 m6 contemp">
      <span>
      @if($idioma=="es")
      47 AÑOS DE TRAYECTORIA
      @elseif($idioma=="en")
      47 YEARS OF TRAJECTORY
      @else
      47 ANOS DE TRAJETÓRIA
      @endif
      </span>
      <p class="tituloemp">{{$contenido->{"titulo_".$idioma} }}</p>
      <div class="textoemp">
        {!!$contenido->{"texto_".$idioma} !!}
      </div>
    </div>
    <div class="col s12 m6">
      <img class="responsive-img" src="{{ asset($contenido->imagen) }}">
    </div>
  </div>
</div>    

@include('pages.template.footer')

<script src="{{ asset('js/materialize.js')}}"></script> 
<script src="{{ asset('js/materialize.min.js')}}"></script> 
<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  $('.dropdown-trigger').dropdown();

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

</script>
  
</body>

</html>