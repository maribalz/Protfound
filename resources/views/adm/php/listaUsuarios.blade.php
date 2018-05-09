@extends('adm.cuerpo')

@section('titulo','Usuarios')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Editar usuarios</h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered table-responsive">
				<thead>
					<td>Usuario</td>
					<td>Nombre</td>
					<td>Nivel</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($usuarios as $usuario)
						<tr>
							<td>{{$usuario->usuario}}</td>
							<td>{{$usuario->nombre}}</td>
							<td>{{$usuario->nivel}}</td>
							<td><a href="{{ route('usuario.edit',$usuario->id) }}" class="btn btn-xs btn-warning">Editar</a>
							<a href="{{ route('usuario.destroy',$usuario->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection