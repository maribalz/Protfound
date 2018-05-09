@extends('adm.cuerpo')

@section('titulo','Editar Red Social')

@section('contenido')
<div class="row">
	<div class="col-xs-12 col-md-8 col-md-offset-2">
		<div class="panel panel-default  col-sm-8">
            <div class="panel-heading">
                <h3 class="panel-title">Editar red social</h3>
            </div>

    @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                  @endforeach
                </div>
            @endif
    {!! Form::open(['route' => 'redes.update_redes', 'method' => 'POST', 'class'=> 'form-horizontal', 'enctype' => 'multipart/form-data'])!!}
        <div class="form-group col-sm-12 pad-panel" >
            {!! Form::text('id', $red->id, ['class' => 'form-control novisi'])!!}
            {!!Form::label('nombre','Nombre', ['class' => 'control-label'])!!}
              
            {!! Form::text('nombre', $red->nombre , ['class' => 'form-control', 'placeholder' => 'Ingrese su nombre', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('link','Url', ['class' => 'control-label'])!!}
              
            {!! Form::text('link', $red->link, ['class' => 'form-control', 'placeholder' => 'Ingrese la url de la red social', 'required'])!!}
           
        </div>

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('logo','Logo', ['class' => 'control-label'])!!}
              
            {!! Form::file('imagen', ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('ubicacion','Ubicación ', ['class' => 'control-label'])!!}
              
            {!! Form::select('ubicacion', ['header' => 'Header', 'footer' => 'Footer'], $red->ubicacion, ['class' => 'form-control']) !!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel">
			<div class="col-sm-12">
				<input class="btn btn-success" type="submit" value='Actualizar'/>
			</div>
		</div>
         
      {!! Form::close() !!}
				
		</div>
	</div>	
</div>

@endsection