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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
</head>

<body>

@include('pages.template.header')


<div class="contenedor margenfoot margen-top" >
    <div class="row" style="margin-bottom: 0px;">
        <div class="col s12 titledes" style="margin-top: 0px;">
            <span>LINKS DE INTERÉS</span>
            <p>Descargas</p>
        </div>
    </div>
    <div class="row" >
        @foreach($descargas as $descarga)
            <div class="col s12 l6">
            <a href="{{$descarga->archivo}}" target="_blank">
                <div class="boxdescarga ">
                    <img src="{{asset('imagenes/pdf.png')}}" class="responsive-img">
                    {{$descarga->nombre}}
                    <i class="small material-icons">arrow_downward</i>
                </div>
            </a>
            </div>
        @endforeach
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