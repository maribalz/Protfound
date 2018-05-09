<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tubulón</title>  
    <link rel="icon" type="image/png" href="{{ asset('imagenes/logos/favicon.png') }}"/>
    <meta name="keywords" content="{{ $metadato->keywords }}">
    <meta name="description" content="{{ $metadato->description }}">
    <script type="text/javascript" src="{{ asset('js/jquery-2.2.0.min.js') }}"></script> 
 <!-- Bootstrap-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/contacto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/style.css') }}">

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> 
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

</head>
<body>
@include('pages.template.header')
@php
{{
    $num=0;

    $curl = curl_init();

    $url = "http://free.currencyconverterapi.com/api/v5/convert?q=USD_ARS&compact=ultra";

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 200,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));

    $response = json_decode(curl_exec($curl), true);


    if(isset($response)){
        $usd = $response['USD_ARS'];
    }


}}
@endphp
<div class="container" style="padding-top: 35px; ">
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
                <div class="col-xs-12 " >
                    <span class="titulo-contacto">
                       CONSULTANOS TU PRODUCTOS
                    </span>
                    <div class="lineatit"></div>
                    <div class="descrip">
                        Contáctanos y te brindaremos toda la información que necesites
                    </div>
                </div>

                </div>
            </div>
            <div class="tablacont">
                <table class="table table-striped table-bordered">
                    <tr>
                        @if($tabla->a != null)
                            <td>
                                {{$tabla->a}}
                            </td>
                        @endif

                        @if($tabla->b != null)
                            <td>
                                {{$tabla->b}}
                            </td>
                        @endif

                        @if($tabla->c != null)
                            <td>
                                {{$tabla->c}}
                            </td>
                        @endif

                        @if($tabla->d != null)
                            <td>
                                {{$tabla->d}}
                            </td>
                        @endif
                    <!-- PRECIO EN DOLARES  -->
                        @if($tabla->g != null)
                            <td>
                                {{number_format(number_format((float)$tabla->g,2)/$usd,2)}}
                            </td>
                        @endif
                    <!-- DESCUENTO EN DOLARES  -->

                        @if($tabla->g != null)
                            <td>
                                {{$tabla->f}}
                            </td>
                        @endif
                    <!-- PRECIO EN PESOS  -->

                        @if($tabla->g != null)
                            <td>
                                {{$tabla->g}}
                            </td>
                        @endif

                        @if($tabla->h != null)
                            <td>
                                {{$tabla->h}}
                            </td>
                        @endif

                        @if($tabla->i != null)
                            <td>
                                {{$tabla->i}}
                            </td>
                        @endif

                        @if($tabla->j != null)
                            <td>
                                {{$tabla->j}}
                            </td>
                        @endif
                    </tr>
                </table>
            </div>
            
        {!!Form::open(['route' => 'consulta.enviarconsulta', 'method'=>'post']) !!}
            <fieldset>
            <div class="col-xs-12 col-md-6" >
            <div class="form-group">
                {!! Form::text('tabla', $tabla->id, ['class' => 'form-control novisi'])!!}

                <input type="text" class="form-control" name='nombre' id='' 
                placeholder='Nombre' minlength="3" maxlength="30" required="">
            </div>
            <div class="form-group visible-xs">
                <input type="text" class="form-control" name='apellido' id='' placeholder='Apellido' minlength="3" maxlength="30" >
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name='email' id='' placeholder='Email'  required="">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="mensaje" class="form-control" placeholder="Mensaje" style="padding-left: 9px;"></textarea>
            </div>
            </div>

            <div class="col-xs-12 col-md-6">
            <div class="form-group hidden-xs">
                <input type="text" class="form-control" name='apellido' id='' placeholder='Apellido' minlength="3" maxlength="30" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name='empresa' id='' placeholder='Empresa' minlength="3" maxlength="30" >
            </div>
            
            <div class="form-group col-xs-12">
                <div class="g-recaptcha margin-for-responsive" data-sitekey="6LdSbhUUAAAAAOMslhzzcAnhWiFAm3ndMPgoRak6"></div>
            </div>
            <div class="form-group">
                <input type="checkbox" name="acept" required=""><label class="acept-term"> Acepto los términos y condiciones de privacidad</label>
            </div>
            <div class="form-group">
                <input class="btn form-control fuenteRC" type="submit" value='ENVIAR'/>
            </div>
            
                
            </div>
            </fieldset>
        {!!Form::close() !!}
        </div>
</div>
  

@include('pages.template.footer')
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>   
</body>

</html>