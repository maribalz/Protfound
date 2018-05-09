@extends('adm.cuerpo')

@section('titulo','Clientes')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Editar clientes
                <a href="{{route('clientes.create')}}" class="btnnuevo">Nuevo <i class="glyphicon glyphicon-plus"></i></a></h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered table-responsive">
				<thead>
					<td>orden</td>
					<td>nombre</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($clientes as $cliente)
						<tr>
							<td>{{$cliente->orden}}</td>
							<td>{{$cliente->nombre}}</td>
							<td><a href="{{ route('clientes.edit',$cliente->id) }}" class="btn btn-xs btn-warning">Editar</a>
							<a href="{{ route('clientes.destroy',$cliente->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection