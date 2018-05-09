@extends('adm.cuerpo')

@section('titulo','Categorías')

@section('contenido')
<div class="row">
	<div class="col-xs-12 col-md-8 col-md-offset-2">
		<div class="panel panel-default  col-sm-8">
            <div class="panel-heading">
                <h3 class="panel-title">Editar categorías</h3>
            </div>

    @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                  @endforeach
                </div>
            @endif
    {!! Form::open(['route' => 'categorias.update_categoria', 'method' => 'POST', 'class'=> 'form-horizontal'])!!}
        <div class="form-group col-sm-12 pad-panel" >
            {!! Form::text('id', $categoria->id, ['class' => 'form-control novisi'])!!}
            {!!Form::label('nombre','Nombre Es', ['class' => 'control-label'])!!}
              
            {!! Form::text('nombre_es', $categoria->nombre_es, ['class' => 'form-control', 'placeholder' => '', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre','Nombre En', ['class' => 'control-label'])!!}
              
            {!! Form::text('nombre_en', $categoria->nombre_en , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre','Nombre Pt', ['class' => 'control-label'])!!}
              
            {!! Form::text('nombre_pt', $categoria->nombre_pt , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoría', 'required'])!!}
           
        </div>

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('orden','Orden ', ['class' => 'control-label'])!!}
              
            {!! Form::text('orden',$categoria->orden, ['class' => 'form-control', 'placeholder' => 'Description'])!!}
           
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