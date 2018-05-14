@extends('adm.cuerpo')



@section('titulo','Editar Contenido Home')



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

    {!! Form::open(['route' => 'contenidohome.update_contenido', 'method' => 'POST', 'class'=> 'form-horizontal', 'enctype' => 'multipart/form-data'])!!}

        <div class="form-group col-sm-12 pad-panel" >

            {!! Form::text('id', $contenido->id, ['class' => 'form-control novisi'])!!}

            {!!Form::label('titulo','Título ', ['class' => 'control-label'])!!}

              

            {!! Form::text('titulo', $contenido->titulo, ['class' => 'form-control'])!!}

           

        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('texto','Texto ', ['class' => 'control-label'])!!}
            {!! Form::textarea('texto',$contenido->texto, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('texto','Texto Industria', ['class' => 'control-label'])!!}
            {!! Form::textarea('texto_industria',$contenido->texto_industria, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-6 pad-panel" >

            {!!Form::label('texto','Texto sector 1', ['class' => 'control-label'])!!}
            {!! Form::text('sector1_texto',$contenido->sector1_texto, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-6 pad-panel" >
            {!!Form::label('sector1','Imagen Sector 1', ['class' => 'control-label'])!!}
            {!! Form::file('sector1', ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-6 pad-panel" >

            {!!Form::label('texto','Texto sector 2', ['class' => 'control-label'])!!}
            {!! Form::text('sector2_texto',$contenido->sector2_texto, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-6 pad-panel" >
            {!!Form::label('sector2','Imagen Sector 2', ['class' => 'control-label'])!!}
            {!! Form::file('sector2', ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-6 pad-panel" >

            {!!Form::label('texto','Texto sector 3', ['class' => 'control-label'])!!}
            {!! Form::text('sector3_texto',$contenido->sector3_texto, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-6 pad-panel" >
            {!!Form::label('sector3','Imagen Sector 3', ['class' => 'control-label'])!!}
            {!! Form::file('sector3', ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-6 pad-panel" >

            {!!Form::label('texto','Texto sector 4', ['class' => 'control-label'])!!}
            {!! Form::text('sector4_texto',$contenido->sector4_texto, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-6 pad-panel" >
            {!!Form::label('sector4','Imagen Sector 4', ['class' => 'control-label'])!!}
            {!! Form::file('sector4', ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('titulo','Link (botón)', ['class' => 'control-label'])!!}
            {!! Form::text('link', $contenido->link, ['class' => 'form-control'])!!}
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

    CKEDITOR.replace("texto");
    CKEDITOR.replace("texto_industria");
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';

</script>



@endsection