@extends('adm.cuerpo')

@section('titulo','Editar Slider Principal')
@section('contenido')
<div class="row">
	<div class="col-xs-12 col-md-10 col-md-offset-2">
		<div class="panel panel-default  col-sm-8">
            <div class="panel-heading">
                <h3 class="panel-title">Editar slider</h3>
            </div>

    @if(count($errors) > 0)

                <div class="alert alert-danger" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  @foreach($errors->all() as $error)

                <p>{{$error}}</p>

                  @endforeach

                </div>

            @endif

    @if($seccion==='home')

        {!! Form::open(['route' => 'sliderhome.update_slider', 'method' => 'POST', 'class'=> 'form-horizontal', 'enctype' => 'multipart/form-data'])!!}

    @elseif($seccion==='emp')

        {!! Form::open(['route' => 'slideremp.update_slider', 'method' => 'POST', 'class'=> 'form-horizontal', 'enctype' => 'multipart/form-data'])!!}

    @endif

        <div class="form-group col-sm-12 pad-panel" >

            {!! Form::text('id', $slider->id, ['class' => 'form-control novisi'])!!}

            {!!Form::label('texto','Texto Es', ['class' => 'control-label'])!!}

              

            {!! Form::textarea('texto', $slider->texto , ['class' => 'form-control', 'required', 'maxlength' => '300'])!!}

           

        </div>

       

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('Imagen','Imagen (Tamaño recomendado 1400x417)', ['class' => 'control-label'])!!}

              

            {!! Form::file('imagen', ['class' => 'form-control'])!!}

           

        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('orden','Orden ', ['class' => 'control-label'])!!}

              

            {!! Form::text('orden', $slider->orden , ['class' => 'form-control', 'placeholder' => '', 'required'])!!}

           

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

    CKEDITOR.config.width = 500;

    CKEDITOR.config.width = '99%';

</script>

@endsection