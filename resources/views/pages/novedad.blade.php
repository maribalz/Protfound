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
      

    <div class="contenedor centro-novedades   fondodestacados  margenfoot" id="pos" style="margin-top: 15px;">
      <div class="row margindestacados">
      <div class="col s12 migas">{{$idioma}}
        <a href="{{route('novedades')}}" >
        @if($idioma=='es')
         Novedades 
        @elseif($idioma=='en')
        News
        @else
        Notícias
        @endif

        </a> | <a href="{{route('buscarnove.show',$categorianove->id)}}">{{$categorianove->{"nombre_".$idioma} }} </a> | {{$novedad->{"nombre_".$idioma} }}
      </div>
       <div class="col s12 col m9 " >

            <div class="col-xs-12 " style="padding-left: 1px;"> 
              <img style="width: 100%;" src="{{asset($novedad->imagen_maxi)}}" class="img-responsive imgnovedades"  alt="imagen">
              
            </div>
            <div class="col s12 titular_listado_novedades" style="padding-left: 1px; margin-bottom: 2%;">
              <span class="Nombre_novedad fuenteRC">
                {{ strtoupper($categorianove->{"nombre_".$idioma} )}}
              </span>
              <div class="linea_novedad" ></div>
            </div>
            <div class="col s12 " style="padding-left: 1px;" >
              <p class="novedadestitulo fuenteRC">{{$novedad->{"nombre_".$idioma} }}</p>
              <p class="novedadesfecha">{{$novedad->fecha}}</p>
              
              <div class="novedadesbreve">{!!$novedad->{"texto_".$idioma} !!}</div>
            </div>
            <div class="col s12" style="margin-top: 25px; padding: 0px;">
              <a href="{{$novedad->{"ficha_".$idioma} }}" target="_blank" class=" btn-descarga">
              @if($idioma=='es')
              Descargar PDF
              @elseif($idioma=='en')
              Download PDF
              @else
              Baixar PDF
              @endif

              </a>
            </div>

      </div>
      <div class="col s12 col m3 buscadorfiltrador">
        <div class="col s12 nopadding" style="padding-bottom:10px; ">
              <form action="{{route('buscarnove.store')}}" class="buscador_noticias" method="POST">
              {{ csrf_field() }}
                  <input placeholder="{{ $buscar_input }}" name="busca" class="buscador2" type="text">
              </form>
        </div>
              <div class="categorias fuenteRC">
                <a href="{{route('novedades')}}"><p>Categorías</p></a>
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