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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/estilos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/novedades.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">


</head>
<body>
@include('pages.template.header')
@php
{{   
      $inicio = 'Inicio';
      $noticias = 'Actualidad';
      if($idioma=='es'){
        $buscar_input = 'Buscar';

      }elseif($idioma=='en'){
        $buscar_input = 'Search';          
      }else{
        $buscar_input = 'Pesquisar';
      }
}}
@endphp
      

    <div class="contenedor centro-novedades   fondodestacados margen-top margenfoot" id="pos" >
      <div class="row margindestacados">
      <div class="col s12 titulonove">
        @if($idioma=='es')
          <p class="novep">Últimas noticias</p>
          Novedades
        @elseif($idioma=='en')
          <p class="novep">Last News</p>
          News
        @else
          <p class="novep">Últimas noticias</p>
          Notícias
        @endif
      </div>
        
      <div class="col s12 col m9 " >
      @foreach($categorias as $categoria)
        @foreach($novedades as $novedad)
          @if($novedad->id_categoria == $categoria->id)

          <a href="{{route('novedad',$novedad->id)}}" style="text-decoration: none">
          <div class="col s12 col m6" style="margin-bottom: 6%;">
          <div class="row">
            <div class="col s12 " style="padding-left: 1px;"> 
              <img style="width: 100%;" src="{{asset($novedad->imagen)}}" class="img-responsive imgnovedades"  alt="imagen">
              
            </div>
            <div class="col s12 titular_listado_novedades" style="padding-left: 1px; margin-bottom: 2%;">
              <span class="Nombre_novedad fuenteRC">
                {{ strtoupper($categoria->{"nombre_".$idioma} )}}
              </span>
              <div class="linea_novedad" ></div>
            </div>
            <div class="col s12 " style="padding-left: 1px;" >
              <p class="novedadestitulo fuenteRC">{{$novedad->{"nombre_".$idioma} }}</p>
              <p class="novedadesfecha">{{$novedad->fecha}}</p>
              
              <div class="novedadesbreve">{!!$novedad->{"texto_breve_".$idioma} !!}</div>

              <a href="{{route('novedad',$novedad->id)}}" class=" btn-nove">
              @if($idioma=='es')
                Leer más»
              @elseif($idioma=='en')
                Read more»
              @else
                Ler mais»
              @endif
              </a>
            </div>
            </div>
          </div>
          </a>
          @endif
        @endforeach
      @endforeach
      </div>   <!-- ******************************************************* Columna1 -->
      <div class="col s12 col m3 buscadorfiltrador">
        <div class="col s12 nopadding" style="padding-bottom:10px; ">
              <form action="{{route('buscarnove.store')}}"  method="POST">
              {{ csrf_field() }}
                  <input type="text" placeholder="{{ $buscar_input }}" name="busca" class="buscador2" >
              </form>
        </div>
              <div class=" categorias fuenteRC">
                <a href="{{route('novedades')}}"><p>
                  @if($idioma=='es')
                    Categorías
                  @elseif($idioma=='en')
                    Categories
                  @else
                    Categorias
                  @endif
                </p></a>
              </div>
              <div class="col s12" style="padding-left: 1px;">
              @foreach($categorias2 as $categoria2)
                 
                  <a href="{{route('buscarnove.show',$categoria2->id)}}" style="text-decoration:none !important;"><li class="tagcategoria fuenteRC">»{{$categoria2->{"nombre_".$idioma} }}</li></a>

               @endforeach
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