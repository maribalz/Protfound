@extends('adm.cuerpo')

@section('titulo','Categorías')

@section('contenido')
<div class="row">
	<div class="col-xs-12 col-md-6 col-md-offset-3">
		<div class="panel panel-default  col-sm-8">
            <div class="panel-heading">
                <h3 class="panel-title">Crear categoría</h3>
            </div>
            @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                  @endforeach
                </div>
            @endif
    {!! Form::open([ 'route' => 'categorias.store', 'method' => 'POST', 'class'=> 'form-horizontal' ])!!} 
    {{ csrf_field() }}
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre','Nombre Es', ['class' => 'control-label'])!!}
              
            {!! Form::text('nombre_es', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre','Nombre En', ['class' => 'control-label'])!!}
              
            {!! Form::text('nombre_en', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre','Nombre Pt', ['class' => 'control-label'])!!}
              
            {!! Form::text('nombre_pt', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('orden','Orden', ['class' => 'control-label'])!!}
              
   
            {!! Form::text('orden', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un orden', 'required'])!!}
           
        </div>

        <div class="form-group col-sm-12 pad-panel">
			<div class="col-sm-12">
				<input class="btn btn-success" type="submit" value='Crear'/>
			</div>
		</div>
         
      {!! Form::close() !!}
				
		</div>
	</div>	
</div>

@endsection