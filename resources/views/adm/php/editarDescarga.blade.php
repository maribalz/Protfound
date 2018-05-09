@extends('adm.cuerpo')



@section('titulo','Descargas')



@section('contenido')

<div class="row">

	<div class="col-xs-12 col-md-11 col-md-offset-2">

		<div class="panel panel-default  col-sm-8">

            <div class="panel-heading">

                <h3 class="panel-title">Editar descarga</h3>

            </div>

            @if(count($errors) > 0)

                <div class="alert alert-danger" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  @foreach($errors->all() as $error)

                <p>{{$error}}</p>

                  @endforeach

                </div>

            @endif

    {!! Form::open([ 'route' => 'descargas.update_descarga', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true ])!!}

    {{ csrf_field() }}

        <div class="form-group col-sm-12 pad-panel" >

            {!! Form::text('id', $descarga->id, ['class' => 'form-control novisi'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre_es','Nombre Español', ['class' => 'control-label'])!!}
            {!! Form::text('nombre_es', $descarga->nombre_es, ['class' => 'form-control', 'placeholder' => 'Ingrese un orden','required'])!!}
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre_en','Nombre Inglés', ['class' => 'control-label'])!!}
            {!! Form::text('nombre_en', $descarga->nombre_en, ['class' => 'form-control', 'placeholder' => 'Ingrese un orden','required'])!!}
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre_pt','Nombre Portugues', ['class' => 'control-label'])!!}
            {!! Form::text('nombre_pt', $descarga->nombre_pt, ['class' => 'form-control', 'placeholder' => 'Ingrese un orden','required'])!!}
        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('archivo_es','Archivo Español', ['class' => 'control-label'])!!}

              

            {!! Form::file('archivo_es', ['class' => 'form-control'])!!}

           

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('archivo_en','Archivo Inglés', ['class' => 'control-label'])!!}

              

            {!! Form::file('archivo_en', ['class' => 'form-control'])!!}

           

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('archivo_pt','Archivo Portugués', ['class' => 'control-label'])!!}

              

            {!! Form::file('archivo_pt', ['class' => 'form-control'])!!}

           

        </div>



        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('orden','Orden', ['class' => 'control-label'])!!}

              

            {!! Form::text('orden', $descarga->orden, ['class' => 'form-control', 'placeholder' => 'Ingrese un orden'])!!}

           

        </div>



        <div class="form-group col-sm-12 pad-panel">

			<div class="col-sm-12">

				<input class="btn btn-success" type="submit" value='Actualizar'/>

			</div>

		</div>

         

      {!! Form::close() !!}

				

		</div>

	</div>	

</div>



@endsection