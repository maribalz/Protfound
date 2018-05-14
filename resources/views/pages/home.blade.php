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



<div class="contenedor margen-top">

  <div class="row">

    <div class="col s12 titledestacados">
        Productos Destacados
    </div>

    @foreach($destacados as $destacado)

      <div class="col m12 l3  margendest">
        <a href="{{$destacado->link}}">
          <div class="img-dest">

            <img class="responsive-img" src="{{asset($destacado->imagen)}}">

          </div>

          <div class="nom-dest">
            {{$destacado->{"nombre"} }}
            <i class="material-icons">add</i>
          </div>
        </a>
      </div>

    @endforeach

  </div>

</div>
<div class="backindustria">
    <div class="contenedor">
        <div class="row">
          <div class="col m12 l6 infoind">
            <span>Industrias</span>
            {!!$contenido->texto_industria!!}
            
          </div>
          <div class="col m12 l6">

            <div class="row">
              <div class="col s6 sectorind">
                <img src="{{asset($contenido->sector1)}}">
                <div>{{$contenido->sector1_texto}}</div>
              </div>
              <div class="col s6 sectorind">
                <img src="{{asset($contenido->sector2)}}">
                <div>{{$contenido->sector2_texto}}</div>
              </div>
            </div>

            <div class="row">
              <div class="col s6 sectorind">
                <img src="{{asset($contenido->sector3)}}">
                <div>{{$contenido->sector3_texto}}</div>
              </div>
              <div class="col s6 sectorind">
                <img src="{{asset($contenido->sector4)}}">
                <div>{{$contenido->sector4_texto}}</div>
              </div>
            </div>

          </div>
        </div>
    </div>
</div>

<div class="fondogris">

  <div class="contenedor">

    <div class="row margenhistoria">

      <div class="col s12 minitext">
        PROTFUND LÍDER EN EL RUBRO
      </div>

      <div class="col s12 titulotext">

          {{ $contenido->{"titulo"} }}

      </div>

      <div class="col s12 texthome">
          {!! $contenido->{"texto"} !!}
            <a href="{{$contenido->link}}" class=" btn-historia">CONOCÉ MÁS</a>
      </div>

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