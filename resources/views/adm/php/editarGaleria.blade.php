@extends('adm.cuerpo')

@section('titulo','Galería de Productos')

@section('contenido')
<div class="row">
	<div class="col-xs-12 col-md-8 col-md-offset-2">
		<div class="panel panel-default  col-sm-8">
            <div class="panel-heading">
                <h3 class="panel-title">Editar galería <strong>{{$producto->nombre}}</strong></h3>
            </div>

    		@if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                  @endforeach
                </div>
            @endif

    {!! Form::open(['route' => 'galeria.update_slider', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true])!!}
        
        <div class="form-group col-sm-12 pad-panel" >
            {!! Form::text('id', $imagen->id, ['class' => 'form-control novisi'])!!}
            {!!Form::label('Imagen','Imagen (Tamaño 319x319)', ['class' => 'control-label'])!!}
              
            {!! Form::file('imagen', ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('orden','Orden ', ['class' => 'control-label'])!!}
              
            {!! Form::text('orden',$imagen->orden, ['class' => 'form-control', 'placeholder' => 'Description'])!!}
           
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