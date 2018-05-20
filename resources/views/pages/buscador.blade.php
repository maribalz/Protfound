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



<div class="container margen-top">

  <div class="row">

    <div class="col-xs-12 tituloprodu">

        BUSCADOR

    </div>

  </div>  

  <div class="row">

    <div class="col-xs-12 campobusca">

      <div class="formulario">

        {!!Form::open([ 'route' => 'buscador', 'method' => 'POST']) !!}

          <div class="form-group">

          {!! Form::text('busca', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'required'])!!}

          </div>

          <div class="form-group ">

            <div class="campobusca">

              <input class="btn-historia" type="submit" value='Buscar'/>

            </div>

          </div>

        {!!Form::close() !!}

      </div>

    </div>

  </div>

  <div class="row" style="margin-top: 9%;">

    @if($busca==1)

       @foreach($productos as $producto)

          <div class="col s12 m4" style="margin-bottom: 40px;">

            <a href="{{route('productoind',$producto->id)}}">

              <div class="border" style="height: 300px; display: flex;align-items: center;justify-content: center;">

                <img class="responsive-img" src="{{asset($producto->imagen)}}" alt="{{$producto->{'nombre'} }}">

              </div>

              <div class="nom-pro">

                  {{$producto->{'nombre'} }}

              </div>

            </a>

            

          </div>

        @endforeach

    @endif

  </div>

</div>



@include('pages.template.footer')

  

</body>



</html>