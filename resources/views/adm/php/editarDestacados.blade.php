@extends('adm.cuerpo')

@section('titulo','Productos destacados')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Editar productos destacados</h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered table-responsive">
				<thead>
					<td>Orden</td>
					<td>Imagen</td>
					<td>Nombre Es</td>
					<td>Enlace</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($destacados as $destacado)
						<tr>
							<td>{{$destacado->orden}}</td>
							<td width="25%"><img class="img-responsive" src="{{asset($destacado->imagen)}}" ></td>
							<td>{{$destacado->nombre_es}}</td>
							<td>{{$destacado->link}}</td>
							<td><a href="{{ route('destacados.edit',$destacado->id) }}" class="btn btn-xs btn-warning">Editar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection