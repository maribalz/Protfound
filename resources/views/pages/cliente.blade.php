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
        <span>PROFESIONALES QUE NOS ELIGEN</span>
        <p>NUESTROS CLIENTES</p>
        <div>
          Nuestra misión es cubrir las necesidades de nuestros clientes y brindar el mejor servicio. Estos son algunos de los clientes con los que trabajamos.
        </div>
    </div>


    @foreach($clientes as $destacado)

      <div class="col s12 l4  margendest">
          <div class="center boximgcliente">
            <img src="{{asset($destacado->imagen)}}" class="responsive-img">
          </div>
          <div class="nom-cliente center">
            {{$destacado->nombre}}
          </div>
      </div>
    @endforeach
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