@extends('adm.cuerpo')

@section('titulo','Modelos')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="panel panel-default table-responsive">

            <div class="panel-heading">
                <h3 class="panel-title">Editar modelo
                <a href="{{route('modelo.create_modelo',$mod->id)}}" class="btnnuevo">Nuevo <i class="glyphicon glyphicon-plus"></i></a></h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered ">
				<thead>
					<td>Nombre español</td>
					<td>Contenido español</td>
					<td>Orden</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($modelos as $producto)
						<tr>
							<td>{{$producto->titulo_es}}</td>
							<td>{{$producto->contenido_es}}</td>
							<td>{{$producto->orden}}</td>
							<td>
							<a href="{{ route('modelo.edit',$producto->id) }}" class="btn btn-xs btn-warning">Editar</a>
							<a href="{{ route('modelo.destroy',$producto->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection