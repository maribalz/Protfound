@extends('adm.cuerpo')



@section('titulo','Productos')



@section('contenido')

<div class="row">

	<div class="col-xs-12 col-md-11 col-md-offset-2">

		<div class="panel panel-default  col-sm-8">

            <div class="panel-heading">

                <h3 class="panel-title">Crear producto</h3>

            </div>

            @if(count($errors) > 0)

                <div class="alert alert-danger" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  @foreach($errors->all() as $error)

                <p>{{$error}}</p>

                  @endforeach

                </div>

            @endif

    {!! Form::open([ 'route' => 'producto.store', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true ])!!}

    {{ csrf_field() }}

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('nombre','Nombre ', ['class' => 'control-label'])!!}
            {!! Form::text('nombre', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto', 'required'])!!}

        </div>

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('descripcion','Descripción ', ['class' => 'control-label'])!!}
            {!! Form::textarea('descripcion',null, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto','Texto ', ['class' => 'control-label'])!!}
            {!! Form::textarea('texto',null, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-6 pad-panel" >
            {!!Form::label('video','Video ', ['class' => 'control-label'])!!}
            <br>Ingrese el código de Youtube del video.<br>
            {!! Form::text('video',null, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-6 pad-panel" >
            {!!Form::label('texto_video','Texto Video ', ['class' => 'control-label'])!!}
            {!! Form::text('texto_video',null, ['class' => 'form-control'])!!}
        </div>

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('Imagen','Imagen (Tamaño recomendado 267x191)', ['class' => 'control-label'])!!}
            {!! Form::file('imagen', ['class' => 'form-control','required'])!!}
        </div>


        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('ficha','Ficha', ['class' => 'control-label'])!!}
            {!! Form::file('ficha', ['class' => 'form-control'])!!}
        </div>
        
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('familia','Familia', ['class' => 'control-label'])!!}
            <select class="form-control" name="id_familia">
                @foreach($familias as $fam)
                    <option value="{{$fam->id}}">{{$fam->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('orden','Orden', ['class' => 'control-label'])!!}
            {!! Form::text('orden', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un orden','required'])!!}
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
    CKEDITOR.replace("descripcion");
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';
</script>

@endsection