@extends('adm.cuerpo')



@section('titulo','Contenido Sección Empresa')



@section('contenido')

<div class="row">

    <div class="col-xs-12 col-md-10 col-md-offset-1">

        <div class="panel panel-default">



            <div class="panel-heading">

                <h3 class="panel-title">Editar contenido</h3>

            </div>

            @include('flash::message')

            

			<table class="table table-striped table-bordered table-responsive">

				<thead>

					<td>Título </td>

					<td>Texto</td>

					<td>Imagen</td>

					<td>Acciones</td>

				</thead>

				<tbody>

					

						<tr>

							<td>{{$contenido->titulo}}</td>

							<td>{!!$contenido->texto1!!}</td>

							<td>

								<img class="img-responsive" src="{{asset($contenido->imagen)}}">

							</td>

							<td><a href="{{ route('contenidoemp.edit',$contenido->id) }}" class="btn btn-xs btn-warning">Editar</a>

							</td>

						</tr>

					

				</tbody>

			</table>			

		</div>

    </div>

</div>



@endsection