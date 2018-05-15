@extends('adm.cuerpo')



@section('titulo','Productos')



@section('contenido')

<div class="row">

    <div class="col-xs-12 col-md-8 col-md-offset-2">

        <div class="panel panel-default table-responsive">



            <div class="panel-heading">

                <h3 class="panel-title">Editar productos

                <a href="{{route('producto.create')}}" class="btnnuevo">Nuevo <i class="glyphicon glyphicon-plus"></i></a></h3>

            </div>

            @include('flash::message')

            

			<table class="table table-striped table-bordered ">

				<thead>
					<td>Familia</td>
					<td>Orden</td>
					<td>Producto</td>
					<td width="25%">Imagen</td>
					<td>Descripcion</td>
					<td>Acciones</td>

				</thead>

				<tbody>

					@foreach($productos as $producto)

						<tr>
							<td>
								@foreach($familias as $fam)
									@if($fam->id == $producto->id_familia)
										{{$fam->nombre}}
									@endif
								@endforeach
							</td>
							<td>{{$producto->orden}}</td>
							<td>{{$producto->nombre}}</td>
							<td><img class="img-responsive" src="{{asset($producto->imagen)}}"></td>
							<td>{{$producto->descripcion}}</td>
							<td>
							<a href="{{ route('galeria.index',$producto->id) }}" class="btn btn-xs btn-info">Galeria</a>
							<a href="{{ route('modelo.index_modelo',$producto->id) }}" class="btn btn-xs btn-warning">Modelo</a>
							<a href="{{ route('producto.edit',$producto->id) }}" class="btn btn-xs btn-warning">Editar</a>
							<a href="{{ route('producto.destroy',$producto->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>

						</tr>

					@endforeach

				</tbody>

			</table>			

		</div>

    </div>

</div>



@endsection