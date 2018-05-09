@extends('adm.cuerpo')



@section('titulo','Calidad')



@section('contenido')

<div class="row">

	<div class="col-xs-12 col-md-8 col-md-offset-2">

		<div class="panel panel-default  col-sm-8">

            <div class="panel-heading">

                <h3 class="panel-title">Editar calidad</h3>

            </div>



    @if(count($errors) > 0)

                <div class="alert alert-danger" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  @foreach($errors->all() as $error)

                <p>{{$error}}</p>

                  @endforeach

                </div>

            @endif

    {!! Form::open(['route' => 'calidad.update_calidad', 'method' => 'POST', 'class'=> 'form-horizontal'])!!}

        <div class="form-group col-sm-12 pad-panel" >

            {!! Form::text('id', $calidad->id, ['class' => 'form-control novisi'])!!}

            {!!Form::label('titulo_es','Nombre Español', ['class' => 'control-label'])!!}
            {!! Form::text('titulo_es', $calidad->titulo_es , ['class' => 'form-control', 'placeholder' => '', 'required'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('titulo_en','Nombre Inglés', ['class' => 'control-label'])!!}
            {!! Form::text('titulo_en', $calidad->titulo_en , ['class' => 'form-control', 'placeholder' => '', 'required'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('titulo_pt','Nombre Portugues', ['class' => 'control-label'])!!}
            {!! Form::text('titulo_pt', $calidad->titulo_pt , ['class' => 'form-control', 'placeholder' => '', 'required'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('contenido_es','Contenido en español ', ['class' => 'control-label'])!!}

              

            {!! Form::textarea('contenido_es',$calidad->contenido_es, ['class' => 'form-control'])!!}

           

        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('contenido_en','Contenido en Inglés ', ['class' => 'control-label'])!!}

              

            {!! Form::textarea('contenido_en',$calidad->contenido_en, ['class' => 'form-control'])!!}

           

        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('contenido_pt','Contenido en Portugués ', ['class' => 'control-label'])!!}

              

            {!! Form::textarea('contenido_pt',$calidad->contenido_pt, ['class' => 'form-control'])!!}

           

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

    CKEDITOR.replace("contenido_es");

    CKEDITOR.replace("contenido_en");

    CKEDITOR.replace("contenido_pt");

    CKEDITOR.config.width = 500;

    CKEDITOR.config.width = '99%';

</script>

@endsection