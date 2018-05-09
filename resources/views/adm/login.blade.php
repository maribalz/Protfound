<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel de administración</title>

    <link rel="icon" type="image/png" href="{{asset('imagenes/logos/favicon.png')}}"/> <!--FAVICO AQUI-->

    <link href="{{ asset('css/adm/dist/estilos.css') }}" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/adm/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('css/adm/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/adm/dist/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('css/adm/vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('css/adm/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <style>
        .login-panel{
            margin-top: 50px;
        }
    </style>

</head>

<body>
    

  
<div class="container" style="align-items: center; margin-top: 5%;">
    <div class="row col-md-4 col-md-offset-4">
      @include('flash::message')
      @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          @foreach($errors->all() as $error)
        <p>{{$error}}</p>
          @endforeach
        </div>
      @endif
    </div>
      <div class="row col-md-4 col-md-offset-4" style="display: flex; justify-content: center;">
              <img class="img-resposive"  src="{{ asset($logo->ruta) }}"><!-- AQUI VA EL LOGO-->
      </div>
      
<div class="row" style="margin-top: 1%;">
  <div class="col-md-12" style="margin-top: 20px;display: flex; justify-content: center;">
    <div style="width: 30%;">
      {!! Form::open(['route'=>'adm.login', 'method' => 'POST', 'class'=> 'form-horizontal'])!!}
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('usuario','Usuario ', ['class' => 'col-sm-12'])!!}
            <div class="col-sm-12">
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
              {!! Form::text('usuario', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su usuario', 'required'])!!}
              </div>
            </div>
        </div>

        <div class="form-group col-sm-12 pad-panel" >
          {!!Form::label('password','Contraseña ', ['class' => 'col-sm-12'])!!}
            <div class="col-sm-12">
              <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
              {!! Form::password('password',  ['class' => 'form-control', 'placeholder' => 'Ingrese su contraseña', 'required'])!!}
              </div>
            </div>
        </div>
        <div class="form-group col-sm-12 pad-panel">
            <div class="col-sm-12">
                <input class="btn btn-md btn-info ingre" style=" width: 100%; border-radius: 1px;" type="submit" value='Login'/>
            </div>
        </div>
         
      {!! Form::close() !!}
          
    </div>
  </div>
</div>
</div>

    <!-- jQuery -->
   <script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>

</html>
