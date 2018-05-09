@extends('adm.cuerpo')

@section('titulo','Productos')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="panel panel-default table-responsive">

            <div class="panel-heading">
                <h3 class="panel-title">Editar sectores
                <a href="{{route('sectores.create')}}" class="btnnuevo">Nuevo <i class="glyphicon glyphicon-plus"></i></a></h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered ">
				<thead>
					<td>Sector</td>
					<td width="25%">Imagen</td>
					<td>Orden</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($sectores as $producto)
						<tr>
							<td>{{$producto->titulo_es}}</td>
							<td><img class="img-responsive" src="{{asset($producto->imagen)}}"></td>
							<td>{{$producto->orden}}</td>
							<td>
							<a href="{{ route('sectores.edit',$producto->id) }}" class="btn btn-xs btn-warning">Editar</a>
							<a href="{{ route('sectores.destroy',$producto->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection