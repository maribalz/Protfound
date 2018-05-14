@extends('adm.cuerpo')



@section('titulo','Calidad')



@section('contenido')

<div class="row">

	<div class="col-xs-12 col-md-10 col-md-offset-1">

		<div class="panel panel-default  col-sm-10">

            <div class="panel-heading">

                <h3 class="panel-title">Editar calidad</h3>

            </div>

        @include('flash::message')

    @if(count($errors) > 0)

                <div class="alert alert-danger" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  @foreach($errors->all() as $error)

                <p>{{$error}}</p>

                  @endforeach

                </div>

            @endif

    {!! Form::open(['route' => 'calidad.update_calidad', 'method' => 'POST', 'class'=> 'form-horizontal', 'files'=>true])!!}

        <div class="form-group col-sm-12 pad-panel" >

            {!! Form::text('id', $calidad->id, ['class' => 'form-control novisi'])!!}

            {!!Form::label('texto1','Texto 1', ['class' => 'control-label'])!!}
            {!! Form::textarea('texto1', $calidad->texto1 , ['class' => 'form-control', 'placeholder' => '', 'required'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('texto2','Texto 2', ['class' => 'control-label'])!!}
            {!! Form::textarea('texto2', $calidad->texto2 , ['class' => 'form-control', 'placeholder' => '', 'required'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('certificado1','Certificado 1', ['class' => 'control-label'])!!}
            {!! Form::file('certificado1', ['class' => 'form-control'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('certificado2','Certificado 2', ['class' => 'control-label'])!!}
            {!! Form::file('certificado2', ['class' => 'form-control'])!!}

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

<script src="//cdn.ckeditor.com/4.5.6/full/ckeditor.js"></script>

<script>

    CKEDITOR.replace("texto1");
    CKEDITOR.replace("texto2");
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';

</script>

@endsection