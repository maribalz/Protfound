@extends('adm.cuerpo')



@section('titulo','Crear Slider en Home')



@section('contenido')

<div class="row">

	<div class="col-xs-12 col-md-10 col-md-offset-2">

		<div class="panel panel-default  col-sm-8">

            <div class="panel-heading">

                <h3 class="panel-title">Crear slider</h3>

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

        {!! Form::open([ 'route' => 'sliderhome.store', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true ])!!}

    @elseif($seccion==='emp')

        {!! Form::open([ 'route' => 'slideremp.store', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true ])!!}

    @endif



    {{ csrf_field() }}

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto','Texto ', ['class' => 'control-label'])!!}
            {!! Form::textarea('texto', null , ['class' => 'form-control', 'required', 'maxlength' => '300'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('imagen','Imagen (Tamaño recomendado 1400x417)', ['class' => 'control-label'])!!}
            {!! Form::file('imagen', ['class' => 'form-control', 'required'])!!}
        </div>

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('orden','Orden ', ['class' => 'control-label'])!!}
            {!! Form::text('orden', null , ['class' => 'form-control', 'placeholder' => '', 'required'])!!}
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

    CKEDITOR.replace("texto");

    CKEDITOR.config.width = 500;

    CKEDITOR.config.width = '99%';

</script>

@endsection