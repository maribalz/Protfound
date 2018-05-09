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



<div class="contenedor margen-top">

  <div class="row">

    <div class="col s12 titledes" style="margin-top: 0px;">

      @if($idioma=='es')

        <p class="sub">CERTIFICACIONES INTERNACIONALES</p>

        <span>Calidad y Seguridad</span>

      @elseif($idioma=='en')

        <p class="sub">INTERNATIONAL CERTIFICATIONS</p>

        <span>Quality and Safety</span>

      @else

      <p class="sub">CERTIFICAÇÕES INTERNACIONAIS</p>

      <span>Qualidade e Segurança</span>

      @endif

    </div>
  </div>
  <div class="row">
    <div class="col s12 m6 cont-calidad">
      {!! $calidad->{"contenido_".$idioma} !!}
    </div>
    <div class="col s12 m6 tit-calidad">
      {!! $calidad->{"titulo_".$idioma} !!}
    </div>
  </div>
  <div class="row">
    @foreach($descargas as $descarga)

      <div class="col s12 l6 margen-ca">
          <div  class="inline">
              <div class="calidad-des">
                {{$descarga->{"nombre_".$idioma} }}
              </div>
              <div class="calidad-des">
                @if($idioma=='es')
                  <a href="{{asset($descarga->{"archivo_".$idioma} )}}" target="_blank">Ver Certificado</a>
                @elseif($idioma=='en')
                  <a href="{{asset($descarga->{"archivo_".$idioma} )}}" target="_blank">See Certificate</a>
                @else
                  <a href="{{asset($descarga->{"archivo_".$idioma} )}}" target="_blank">Ver certificado</a>
                @endif
              </div>
            </div>
            <div class="desc inline" style="float: right;">
              <a href="{{asset($descarga->{"archivo_".$idioma} )}}" download>
                <img src="{{asset('imagenes/descarga.png')}}">
              </a>
            </div>

      </div>

    @endforeach
  </div>
</div>
@include('pages.template.footer')

  

    <script src="{{ asset('js/materialize.js')}}"></script> 

    <script src="{{ asset('js/materialize.min.js')}}"></script> 

    

</body>



</html>