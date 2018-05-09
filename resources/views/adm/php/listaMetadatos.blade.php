@extends('adm.cuerpo')

@section('titulo','Metadatos')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Editar metadatos</h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered table-responsive">
				<thead>
					<td>Sección</td>
					<td>Keywords</td>
					<td>Description</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($metadatos as $metadato)
						<tr>
							<td>{{$metadato->seccion}}</td>
							<td>{{$metadato->keywords}}</td>
							<td>{{$metadato->description}}</td>
							<td><a href="{{ route('metadato.edit',$metadato->id) }}" class="btn btn-xs btn-warning">Editar</a>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection