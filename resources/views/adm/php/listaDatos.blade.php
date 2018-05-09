@extends('adm.cuerpo')

@section('titulo','Datos de la Empresa')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Editar datos</h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered table-responsive">
				<thead>
					<td>Tipo</td>
					<td>Descripcion</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($datos as $dato)
						<tr>
							<td>{{$dato->tipo}}</td>
							<td>{{$dato->descripcion}}</td>
							<td><a href="{{ route('datos.edit',$dato->id) }}" class="btn btn-xs btn-warning">Editar</a>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection