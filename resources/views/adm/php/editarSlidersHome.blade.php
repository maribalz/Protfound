@extends('adm.cuerpo')



@section('titulo','Slider Principal')



@section('contenido')

<div class="row">

    <div class="col-xs-12 col-md-10 col-md-offset-1">

        <div class="panel panel-default">



            <div class="panel-heading">

                <h3 class="panel-title">Editar slider principal</h3>

            </div>

            @include('flash::message')

            

			<table class="table table-striped table-bordered table-responsive">

				<thead>

					<td>Orden</td>

					<td>Imagen</td>

					<td width="50%">Texto</td>

					<td width="20%">Acciones</td>

				</thead>

				<tbody>

					@foreach($sliders as $slider)

						<tr>

							<td>{{$slider->orden}}</td>

							<td><img class="img-responsive" src="{{asset($slider->imagen)}}" style="width: 100%;"></td>

							<td>{!!$slider->texto!!}</td>

							<td><a 

							@if($seccion=='home')

								href="{{ route('sliderhome.edit',$slider->id) }}" 



							@elseif($seccion=='emp')

								href="{{ route('slideremp.edit',$slider->id) }}"

							

							@endif



							class="btn btn-xs btn-warning">Editar</a>

							<a 

							@if($seccion==='home')

								href="{{ route('sliderhome.destroy',$slider->id) }}" 

							@elseif($seccion==='emp')

								href="{{ route('slideremp.destroy',$slider->id) }}"

							 

							@endif

							class="btn btn-xs btn-danger">Eliminar</a></td>

						</tr>

					@endforeach

				</tbody>

			</table>			

		</div>

    </div>

</div>



@endsection