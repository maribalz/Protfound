@extends('adm.cuerpo')

@section('titulo','Categorías')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Editar categorías
                <a href="{{route('categorias.create')}}" class="btnnuevo">Nuevo <i class="glyphicon glyphicon-plus"></i></a></h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered table-responsive">
				<thead>
					<td>orden</td>
					<td>nombre</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($categorias as $categoria)
						<tr>
							<td>{{$categoria->orden}}</td>
							<td>{{$categoria->nombre_es}}</td>
							<td><a href="{{ route('categorias.edit',$categoria->id) }}" class="btn btn-xs btn-warning">Editar</a>
							<a href="{{ route('categorias.destroy',$categoria->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection