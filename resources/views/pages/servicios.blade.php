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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/descargas.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/servicios.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

</head>

<body>

@include('pages.template.header')

<div class="contenedor margen-top " style="margin-bottom: 0px;">
  <div class="row" style="margin-bottom: 0px;">
        <div class="col s12 titledes" style="margin-top: 0px;">
            <span>ACTIVIDADES DE LA EMPRESA</span>
            <p>Servicios</p>
        </div>
  </div>  
</div>

@php $cont=0; @endphp

@foreach($servicios as $servicio)
  @if($cont%2==0)
    
      <div class="contenedor">
          <div class="row margenserv" @if($cont==0) style="padding-top: 0px;" @endif>
              <div class="col s12 l6">
                  <img src="{{asset($servicio->imagen)}}" class="responsive-img">
              </div>
              <div class="col s12 l6 textoserv">
                  {!!$servicio->texto!!}
              </div>
          </div>
      </div>
   
  @else
    <div class="fondoserv">
      <div class="contenedor">
          <div class="row margenserv">
              <div class="col s12 l6 textoserv">
                  {!!$servicio->texto!!}
              </div>
              <div class="col s12 l6">
                  <img src="{{asset($servicio->imagen)}}" class="responsive-img">
              </div>
          </div>
      </div>
    </div>

  @endif
  @php $cont++; @endphp
  
@endforeach



@include('pages.template.footer')

    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>  

    <script src="{{ asset('js/materialize.js')}}"></script> 

    <script src="{{ asset('js/materialize.min.js')}}"></script> 

</body>
</html>