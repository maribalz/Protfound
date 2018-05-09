@extends('adm.cuerpo')

@section('titulo','Redes Sociales')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Editar redes sociales</h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered table-responsive">
				<thead>
					<td>Nombre</td>
					<td>Url</td>
					<td>Logo</td>
					<td>Ubicación</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($redes as $red)
						<tr>
							<td>{{$red->nombre}}</td>
							<td>{{$red->link}}</td>
							<td><img src="{{asset($red->logo)}}"></td>
							<td>{{$red->ubicacion}}</td>
							<td><a href="{{ route('redes.edit',$red->id) }}" class="btn btn-xs btn-warning">Editar</a>
							<a href="{{ route('redes.destroy',$red->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection