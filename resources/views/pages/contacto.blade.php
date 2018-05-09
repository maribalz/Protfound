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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/contacto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

</head>
<body>
@include('pages.template.header')
<div class="mapa">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.869613633463!2d-58.25989298476563!3d-34.78405758041314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a3294a74505101%3A0xf2e2936df68a2797!2sCalle+12+53%2C+B1884CDA+Berazategui+Oeste%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1524597745743" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                    @if($idioma=='es')
                        Contactanos y te brindaremos toda la información que necesites
                    @elseif($idioma=='en')
                        Contact us and we will provide you with all the information you need
                    @else
                        Entre em contato e nós forneceremos todas as informações que você precisa
                    @endif

                    </div>
                </div>
                </div>
            </div>
        {!!Form::open(['route' => 'contacto.enviarmail', 'method'=>'post']) !!}
            
            <div class="col s12 col m6" >
            <div class="input-field">
                <input type="text" class="validate" name='nombre' id='nombre' minlength="3" maxlength="30" required="">
                <label for="nombre">
                @if($idioma=='es')
                Nombre
                @elseif($idioma=='en')
                Name
                @else
                Nome
                @endif
                </label>
            </div>
            <div class="input-field">
                <input type="text" class="validate" name='empresa' id='empresa' minlength="3" maxlength="30" >
                <label for="empresa">
                @if($idioma=='es')
                Empresa
                @elseif($idioma=='en')
                Company
                @else
                Empresa
                @endif
                </label>

            </div>
            
            <div class="input-field">
                <textarea class="materialize-textarea" name="mensaje" id="mensaje"></textarea>
                <label for="mensaje">
                @if($idioma=='es')
                Mensaje
                @elseif($idioma=='en')
                Message
                @else
                Mensagem
                @endif
                </label>

            </div>
            </div>

            <div class="col s12 col m6">

            <div class="input-field">
                <input type="text" class="validate" name='telefono' id='telefono' >
                <label for="telefono">
                @if($idioma=='es')
                Teléfono
                @elseif($idioma=='en')
                Phone
                @else
                Telefone
                @endif
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
                @if($idioma=='es')
                 Acepto los términos y condiciones de privacidad
                @elseif($idioma=='en')
                    I accept the terms and conditions of privacy
                @else
                    Eu aceito os termos e condições de privacidade
                @endif
                </span>
                </label>
            </p>
            {{-- <div class="input-field">
                <input class="btn  fuenteRC" type="submit" value='ENVIAR'/>
            </div> --}}
            
                
            </div>
            <div class="col s12 rowbutton">
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