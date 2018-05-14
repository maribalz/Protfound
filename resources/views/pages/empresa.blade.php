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

    @if($slider->{"texto"})

    <div class="caja-slider">

      {!! $slider->{"texto"} !!}

    </div>

    @endif

    </a>



  @endforeach

    

</div>



<div class="contenedor margen-top margenfoot">

  <div class="row ">

    <div class="col s12 m4">

      <img class="responsive-img" src="{{ asset($contenido->imagen) }}">

    </div>
    <div class="col s12 m4 contemp">
      <span>PROTFUND</span>
      <p class="tituloemp">{{$contenido->{"titulo"} }}</p>
      <div class="textoemp">
        {!!$contenido->{"texto1"} !!}
      </div>
    </div>
    <div class="col s12 m4 contemp">
      <div class="textoemp">
        {!!$contenido->{"texto2"} !!}
      </div>
    </div>


  </div>

</div>  
@if($contenido->video)  
<div class="fondogris" style="border-top: 1px solid #E0E0E0;">
  <div class="contenedor">
      <div class="row margenhistoria">
        <div class="col s12 textvideo">
          {!!$contenido->texto_video!!}
        </div>

        <div class="video col s12">
          <iframe width="530" height="301" src="https://www.youtube.com/embed/{{$contenido->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        
      </div>
  </div>
</div>

@endif

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