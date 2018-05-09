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
    <div class="caja-slider">
      {!! $slider->{"texto_".$idioma} !!}
    </div>
    @endif
    </a>

  @endforeach
    
</div>

<div class="contenedor margen-top">
  <div class="row">
    <div class="col s12 titledes">
      @if($idioma=='es')
        <span>Productos Destacados</span>
      @elseif($idioma=='en')
        <span>Featured Products</span>
      @else
      <span>Produtos em destaque</span>
      @endif
    </div>
    @foreach($destacados as $destacado)
      <div class="col m12 l4  margendest">
          <div class="img-dest">
            <img class="responsive-img" src="{{asset($destacado->imagen)}}">
          </div>
          <div class="nom-dest">
            {{$destacado->{"nombre_".$idioma} }}
          </div>
          <div class="textdes">
            {{$destacado->{"texto_".$idioma} }}
          </div>
      </div>
    @endforeach
  </div>
</div>
<div class="fondogris">
  <div class="contenedor">
    <div class="row margenhistoria">
      <div class="col s12 minitext">
      @if($idioma=='es')
        Desde 1971 brindando Calidad y Excelencia
      @elseif($idioma=='en')
        Since 1971 providing Quality and Excellence
      @else
        Desde 1971, oferecendo qualidade e excelência
      @endif
      </div>
      <div class="col s12 titulotext">
          {{ $contenido->{"titulo_".$idioma} }}
      </div>
      <div class="col s12 texthome">
          {!! $contenido->{"texto_".$idioma} !!}
          @if($idioma=='es')
            <a href="{{$contenido->link}}" class=" btn-historia">CONOCÉ MÁS</a>
          @elseif($idioma=='en')
            <a href="{{$contenido->link}}" class=" btn-historia">KNOW MORE</a>
          @else
            <a href="{{$contenido->link}}" class=" btn-historia">SAIBA MAIS</a>
          @endif
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