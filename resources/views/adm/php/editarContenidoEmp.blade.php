@extends('adm.cuerpo')



@section('titulo','Editar Contenido Empresa')



@section('contenido')

<div class="row">

	<div class="col-xs-12 col-md-10 col-md-offset-2">

		<div class="panel panel-default  col-sm-8">

            <div class="panel-heading">

                <h3 class="panel-title">Editar contenido</h3>

            </div>



    @if(count($errors) > 0)

                <div class="alert alert-danger" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  @foreach($errors->all() as $error)

                <p>{{$error}}</p>

                  @endforeach

                </div>

            @endif

    {!! Form::open(['route' => 'contenidoemp.update_contenido', 'method' => 'POST', 'class'=> 'form-horizontal', 'enctype' => 'multipart/form-data'])!!}

        <div class="form-group col-sm-12 pad-panel" >

            {!! Form::text('id', $contenido->id, ['class' => 'form-control novisi'])!!}

            {!!Form::label('titulo','Título', ['class' => 'control-label'])!!}
              
            {!! Form::text('titulo', $contenido->titulo, ['class' => 'form-control', 'required'])!!}

        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('texto','Texto 1', ['class' => 'control-label'])!!}
            {!! Form::textarea('texto1',$contenido->texto1, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('texto','Texto 2', ['class' => 'control-label'])!!}
            {!! Form::textarea('texto2',$contenido->texto2, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('texto','Texto video', ['class' => 'control-label'])!!}
            {!! Form::textarea('texto_video',$contenido->texto_video, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('texto','Video', ['class' => 'control-label'])!!}
            <br>Ingrese el código del video de la url de youtube.<br>
            Ejemplo: https://www.youtube.com/watch?v=<strong>K3JGxj2rvAs</strong><br><br>
            {!! Form::text('video',$contenido->video, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('imagen','Imagen (Tamaño recomendado 570x406)', ['class' => 'control-label'])!!}

            

            {!! Form::file('imagen', ['class' => 'form-control'])!!}

           

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

    CKEDITOR.replace("texto_video");

    CKEDITOR.config.width = 500;

    CKEDITOR.config.width = '99%';

</script>



@endsection