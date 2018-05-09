@extends('adm.cuerpo')

@section('titulo','Logos')

@section('contenido')
<div class="row">
    <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">Editar logos</h3>
            </div>
            @include('flash::message')
            
			<table class="table table-striped table-bordered table-responsive">
				<thead>
					<td>Logo</td>
					<td>Tipo</td>
					<td>Acciones</td>
				</thead>
				<tbody>
					@foreach($logos as $logo)
						<tr>
							<td><img src="{{asset($logo->ruta)}}"></td>
							<td>{{$logo->tipo}}</td>
							<td><a href="{{ route('logos.edit',$logo->id) }}" class="btn btn-xs btn-warning">Editar</a>
						</tr>
					@endforeach
				</tbody>
			</table>			
		</div>
    </div>
</div>

@endsection