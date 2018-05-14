@extends('adm.cuerpo')



@section('titulo','Descargas')



@section('contenido')

<div class="row">

    <div class="col-xs-12 col-md-8 col-md-offset-2">

        <div class="panel panel-default table-responsive">



            <div class="panel-heading">

                <h3 class="panel-title">Editar descargas

                <a href="{{route('descargas.create')}}" class="btnnuevo">Nuevo <i class="glyphicon glyphicon-plus"></i></a></h3>

            </div>

            @include('flash::message')

            

			<table class="table table-striped table-bordered ">

				<thead>

					<td>Orden</td>
					<td>Nombre</td>
					<td>Acciones</td>

				</thead>

				<tbody>

					@foreach($descargas as $descarga)

						<tr>

							<td>{{$descarga->orden}}</td>
							<td>{{$descarga->nombre}}</td>
							<td>

							<a href="{{ route('descargas.edit',$descarga->id) }}" class="btn btn-xs btn-warning">Editar</a>

							<a href="{{ route('descargas.destroy',$descarga->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>

						</tr>

					@endforeach

				</tbody>

			</table>			

		</div>

    </div>

</div>



@endsection