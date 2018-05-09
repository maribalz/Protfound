@extends('adm.cuerpo')

@section('titulo','Novedades')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="panel panel-default table-responsive">

            <div class="panel-heading">
                <h3 class="panel-title">Editar novedades
                <a href="{{route('novedadm.create')}}" class="btnnuevo">Nuevo <i class="glyphicon glyphicon-plus"></i></a></h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered ">
				<thead>
					<td>Categoría</td>
					<td>Orden</td>
					<td>Nombre</td>
					<td>Imagen </td>
					<td>Fecha</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($novedades as $novedad)
						<tr>
							<td>
						@foreach($categorias as $categoria)
							@if($categoria->id == $novedad->id_categoria)
								{{$categoria->nombre}}

							@endif
						@endforeach
							</td>
							<td>{{$novedad->orden}}</td>
							<td>{{$novedad->nombre_es}}</td>
							<td><img class="img-responsive" src="{{asset($novedad->imagen)}}"></td>
							<td>{{$novedad->fecha}}</td>
							<td><a href="{{ route('novedadm.edit',$novedad->id) }}" class="btn btn-xs btn-warning">Editar</a>
							<a href="{{ route('novedadm.destroy',$novedad->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection