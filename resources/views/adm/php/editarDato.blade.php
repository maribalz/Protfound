@extends('adm.cuerpo')

@section('titulo','Datos de la Empresa')

@section('contenido')
<div class="row">
	<div class="col-xs-12 col-md-8 col-md-offset-2">
		<div class="panel panel-default  col-sm-8">
            <div class="panel-heading">
                <h3 class="panel-title">Editar {{$dato->tipo}}</h3>
            </div>

    @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                  @endforeach
                </div>
            @endif
    {!! Form::open(['route' => 'datos.update_dato', 'method' => 'POST', 'class'=> 'form-horizontal'])!!}
        <div class="form-group col-sm-12 pad-panel" >
            {!! Form::text('id', $dato->id, ['class' => 'form-control novisi'])!!}
           
        </div>

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('password','Descripción ', ['class' => 'control-label'])!!}
              
            {!! Form::text('descripcion', $dato->descripcion, ['class' => 'form-control', 'placeholder' => '', 'required'])!!}
           
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