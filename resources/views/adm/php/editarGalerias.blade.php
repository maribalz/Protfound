@extends('adm.cuerpo')

@section('titulo','Galerias de Productos')

@section('contenido')
<div class="row">

    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Editar galeria <strong>{{$producto->nombre}}</strong>
                <a href="{{route('producto.index')}}" class="btnnuevo" style="padding-left: 25px; color: #D90000!important;"> Regresar</a>
                <a href="{{route('galeria.create',$producto->id)}}" class="btnnuevo">Nuevo <i class="glyphicon glyphicon-plus"></i></a>
                </h3>
            </div>
            @include('flash::message') 
            
			<table class="table table-striped table-bordered table-responsive">
				<thead>
					
					<td>Orden</td>
					<td>Imagenes</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($imagenes as $imagen)
						<tr>
							
							<td>{{$imagen->orden}}</td>
							<td><img class="img-responsive" src="{{asset($imagen->imagen)}}" width="50%"></td>


							<td><a href="{{ route('galeria.edit',$imagen->id) }}" class="btn btn-xs btn-warning">Editar</a>
							<a href="{{ route('galeria.destroy',$imagen->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection