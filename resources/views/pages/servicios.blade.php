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





<div class="contenedor margen-top margen-lat">

  <div class="row">

    <div class="col s12 titledes" style="margin-top: 0px;">

        @if($idioma=='es')

          <p class="sub">ATENCIÓN INTEGRAL</p>

          <span>Nuestros Servicios</span>

        @elseif($idioma=='en')

          <p class="sub">COMPREHENSIVE ATTENTION</p>

          <span>Our Services</span>

        @else

        <p class="sub">ATENÇÃO ABRANGENTE</p>

        <span>Nossos Serviços</span>

        @endif

    </div>

  </div>

  <div class="row">

    <div class="contenido-ser">

      {!! $servicio->{"contenido_".$idioma} !!}

    </div>

    <div class="col s12 m3">

      

        <div class="row">

          <div class="col s12">

            <div style="display: flex; justify-content: center; align-items: center;">

              <img src="{{asset($servicio->imagen1)}}">

            </div>

          </div>

        </div>

        <div class="row">

          <div class="col s12">

            <div class="nom-icono" style="display: flex; justify-content: center; align-items: center;">

              {!! $servicio->{"nombre1_".$idioma} !!}

            </div>

          </div>

        </div>  

      

      

    </div>

    <div class="col s12 m3">

      <div class="row">

        <div class="col s12">

          <div style="display: flex; justify-content: center; align-items: center;">

            <img src="{{asset($servicio->imagen2)}}">

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col s12">

          <div class="nom-icono" style="display: flex; justify-content: center; align-items: center;">

            {!! $servicio->{"nombre2_".$idioma} !!}

          </div>

        </div>

      </div>

    </div>

    <div class="col s12 m3">

      <div class="row">

        <div class="col s12">

          <div style="display: flex; justify-content: center; align-items: center;">

            <img src="{{asset($servicio->imagen3)}}">

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col s12">

          <div class="nom-icono" style="display: flex; justify-content: center; align-items: center;">

            {!! $servicio->{"nombre3_".$idioma} !!}

          </div>

        </div>

      </div>

    </div>

    <div class="col s12 m3">

      <div class="row">

        <div class="col s12">

          <div style="display: flex; justify-content: center; align-items: center;">

            <img src="{{asset($servicio->imagen4)}}">

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col s12">

          <div class="nom-icono" style="display: flex; justify-content: center; align-items: center;">

            {!! $servicio->{"nombre4_".$idioma} !!}

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<div class="fondogris" style="padding-top: 0px;">

  <div class="row">

    <div class="title-ase" style="margin-top: 0px;">

      @if($idioma=='es')

          <span>¿Necesitás Acesoramiento?</span>

        @elseif($idioma=='en')

          <span>Do you need Acessorship?</span>

        @else

        <span>Você precisa de Acessorship?</span>

        @endif

    </div>

  </div>

  <div class="row">

    <div class="margen">

      <div class="col s12">

        <div class="input-field">

                <input type="text" class="validate" name='nombre' id='nombre' >

                <label for="nombre">

                @if($idioma=='es')

                Nombre

                @elseif($idioma=='en')

                First Name

                @else

                Nome

                @endif

                </label>



            </div>

      </div>

      <div class="col s12">

        <div class="input-field">

                <input type="text" class="validate" name='apellido' id='apellido' >

                <label for="apellido">

                @if($idioma=='es')

                Apellido

                @elseif($idioma=='en')

                Last Name

                @else

                Sobrenome

                @endif

                </label>



            </div>

      </div>

      <div class="col s12">

         <div class="input-field">

                <input type="email" class="validate" name='email' id='email'  required="">

                <label for="email">Email</label>



            </div>

      </div>

      <div class="col s12">

        <div class="input-field">

                <input type="text" class="validate" name='apellido' id='apellido' >

                <label for="apellido">

                @if($idioma=='es')

                Empresa

                @elseif($idioma=='en')

                Company

                @else

                Negócios

                @endif

                </label>



            </div>

      </div>

      <div class="col s12">

        <div class="input-field ">

            <textarea id="mensaje" name="mensaje" class="materialize-textarea"></textarea>

            <label for="mensaje">@if($idioma=='es')

                Mensaje

                @elseif($idioma=='en')

                Message

                @else

                Mensagem

                @endif</label>

          </div>

      </div>

      <div class="col s12 m6">

        <div class="input-field ">

              <div class="g-recaptcha margin-for-responsive" data-sitekey="6Le4WT4UAAAAAMsSrRvyvdMGIEyHIXLmuf9EFYPl"></div>

          </div>

      </div>

      <div class="col s12 m6 rowbutton">

          

          <button type="submit" class="btn-contacto">

                @if($idioma=='es')

                Enviar

                @elseif($idioma=='en')

                   Submit

                @else

                    Enviar

                @endif

          </button>

      </div>

    </div>

  </div>

</div>



@include('pages.template.footer')

    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>  

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