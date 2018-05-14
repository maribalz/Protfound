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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/contacto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
</head>

<body>

@include('pages.template.header')

<div class="mapa">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.6142655477615!2d-58.32614348496523!3d-34.7401161804243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a32d9f88044e6d%3A0x4ca36ef2f7db65e2!2sProtfund!5e0!3m2!1ses-419!2sar!4v1526230829216" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="contenedor margenfoot" style="padding-top: 35px; ">

    @include('flash::message')

    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif    

        <div class="row"  >
            <div class=" margen-fila ">
                <div class="backgray2">
                <div class="col m12 " >
                    <div class="descrip">
                        Contacto
                    </div>

                </div>

                </div>

            </div>

        {!!Form::open(['route' => 'contacto.enviarmail', 'method'=>'post']) !!}

            

            <div class="col s12 col m6" >

            <div class="input-field">

                <input type="text" class="validate" name='nombre' id='nombre' minlength="3" maxlength="30" required="">

                <label for="nombre">
                Nombre
                </label>

            </div>

            <div class="input-field">

                <input type="text" class="validate" name='empresa' id='empresa' minlength="3" maxlength="30" >
                <label for="empresa">
                Empresa
                </label>
            </div>

            <div class="input-field">

                <textarea class="materialize-textarea" name="mensaje" id="mensaje"></textarea>
                <label for="mensaje">
                Mensaje...
                </label>

            </div>

            </div>

            <div class="col s12 col m6">
            <div class="input-field">
                <input type="text" class="validate" name='telefono' id='telefono' >
                <label for="telefono">
                Teléfono
                </label>
            </div>

            <div class="input-field">
                <input type="email" class="validate" name='email' id='email'  required="">
                <label for="email">Email</label>
            </div>

            <div class="input-field ">

                <div class="g-recaptcha margin-for-responsive" data-sitekey="6Le4WT4UAAAAAMsSrRvyvdMGIEyHIXLmuf9EFYPl"></div>

            </div>

            <p >

                <label>

                <input type="checkbox"  class="filled-in" name="acept" required=""><span class="acept-term">

                 Acepto los términos y condiciones de privacidad
                </span>
                </label>
            </p>
            
            </div>
            <div class="col s12 rowbutton">
                <button type="submit" class="btn-contacto">
                Enviar
                </button>

            </div>

           

        {!!Form::close() !!}

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



  $('#mensaje').val('');

  M.textareaAutoResize($('#mensaje'));



</script> 

</body>



</html>