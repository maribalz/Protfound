@extends('adm.cuerpo')



@section('titulo','Familias')



@section('contenido')

<div class="row">

    <div class="col-xs-12 col-md-8 col-md-offset-2">

        <div class="panel panel-default table-responsive">



            <div class="panel-heading">

                <h3 class="panel-title">Editar familias

                <a href="{{route('familia.create')}}" class="btnnuevo">Nuevo <i class="glyphicon glyphicon-plus"></i></a></h3>

            </div>

            @include('flash::message')

            

			<table class="table table-striped table-bordered ">

				<thead>

					<td>Orden</td>

					<td>Nombre</td>

					<td width="25%">Imagen</td>

					<td>Acciones</td>

				</thead>

				<tbody>

					@foreach($familias as $familia)

						<tr>

							<td>{{$familia->orden}}</td>

							<td>{{$familia->nombre_es}}</td>

							<td><img class="img-responsive" src="{{ asset($familia->imagen) }}"></td>

							

							<td>

							<a href="{{ route('familia.edit',$familia->id) }}" class="btn btn-xs btn-warning">Editar</a>

							<a href="{{ route('familia.destroy',$familia->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>

						</tr>

					@endforeach

				</tbody>

			</table>			

		</div>

    </div>

</div>



@endsection