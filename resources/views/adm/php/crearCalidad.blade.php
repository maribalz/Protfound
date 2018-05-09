@extends('adm.cuerpo')



@section('titulo','Ctitulo')



@section('contenido')

<div class="row">

	<div class="col-xs-12 col-md-6 col-md-offset-3">

		<div class="panel panel-default  col-sm-8">

            <div class="panel-heading">

                <h3 class="panel-title">Crear calidad</h3>

            </div>

            @if(count($errors) > 0)

                <div class="alert alert-danger" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  @foreach($errors->all() as $error)

                <p>{{$error}}</p>

                  @endforeach

                </div>

            @endif

    {!! Form::open([ 'route' => 'calidad.store', 'method' => 'POST', 'class'=> 'form-horizontal' ])!!} 

    {{ csrf_field() }}

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('titulo_es','Nombre Español', ['class' => 'control-label'])!!}
            {!! Form::text('titulo_es', null , ['class' => 'form-control', 'placeholder' => '', 'required'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('titulo_en','Nombre Inglés', ['class' => 'control-label'])!!}
            {!! Form::text('titulo_en', null , ['class' => 'form-control', 'placeholder' => '', 'required'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('titulo_pt','Nombre Portugues', ['class' => 'control-label'])!!}
            {!! Form::text('titulo_pt', null , ['class' => 'form-control', 'placeholder' => '', 'required'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('contenido_es','Contenido en español ', ['class' => 'control-label'])!!}

              

            {!! Form::textarea('contenido_es',null, ['class' => 'form-control'])!!}

           

        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('contenido_en','Contenido en Inglés ', ['class' => 'control-label'])!!}

              

            {!! Form::textarea('contenido_en',null, ['class' => 'form-control'])!!}

           

        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('contenido_pt','Contenido en Portugués ', ['class' => 'control-label'])!!}

              

            {!! Form::textarea('contenido_pt',null, ['class' => 'form-control'])!!}

           

        </div>
        <div class="form-group col-sm-12 pad-panel">

			<div class="col-sm-12">

				<input class="btn btn-success" type="submit" value='Crear'/>

			</div>

		</div>

         

      {!! Form::close() !!}

				

		</div>

	</div>	

</div>

<script src="//cdn.ckeditor.com/4.5.6/full/ckeditor.js"></script>

<script>

    CKEDITOR.replace("contenido_es");

    CKEDITOR.replace("contenido_en");

    CKEDITOR.replace("contenido_pt");

    CKEDITOR.config.width = 500;

    CKEDITOR.config.width = '99%';

</script>

@endsection