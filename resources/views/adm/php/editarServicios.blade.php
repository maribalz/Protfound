@extends('adm.cuerpo')

@section('titulo','Servicios')

@section('contenido')
<div class="row">
	<div class="col-xs-12 col-md-11 col-md-offset-2">
		<div class="panel panel-default  col-sm-8">
            <div class="panel-heading">
                <h3 class="panel-title">Editar producto</h3>
            </div>
            @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                  @endforeach
                </div>
            @endif
    {!!Form::model($servicio, ['route'=>['servicios.update',$servicio->id], 'method'=>'PUT', 'files' => true])!!}   
    {{ csrf_field() }}

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('contenido_es','Contenido en español ', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('contenido_es',$servicio->contenido_es, ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('contenido_en','Contenido en Inglés ', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('contenido_en',$servicio->contenido_es, ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('contenido_pt','Contenido en Portugués ', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('contenido_pt',$servicio->contenido_pt, ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('Imagen','Icono 1 (Tamaño recomendado 267x191)', ['class' => 'control-label'])!!}
              
            {!! Form::file('imagen1', ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre1_es','Nombre en español para icono 1 ', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre1_es',$servicio->nombre1_es, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre1_en','Nombre en Inglés para icono 1', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre1_en',$servicio->nombre1_en, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre1_pt','Nombre en Portugués para icono 1', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre1_pt',$servicio->nombre1_pt, ['class' => 'form-control'])!!}
        </div>
        
        {{-- ************ --}}
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('Imagen','Icono 2 (Tamaño recomendado 267x191)', ['class' => 'control-label'])!!}
              
            {!! Form::file('imagen2', ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre2_es','Nombre en español para icono 2', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre2_es',$servicio->nombre2_es, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre2_en','Nombre en Inglés para icono 2', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre2_en',$servicio->nombre2_en, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre2_pt','Nombre en Portugués para icono 2', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre2_pt',$servicio->nombre2_pt, ['class' => 'form-control'])!!}
        </div>
        {{-- ************ --}}
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('Imagen','Icono 3 (Tamaño recomendado 267x191)', ['class' => 'control-label'])!!}
              
            {!! Form::file('imagen3', ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre3_es','Nombre en español para icono 3', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre3_es',$servicio->nombre3_es, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre3_en','Nombre en Inglés para icono 3', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre3_en',$servicio->nombre3_en, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre3_pt','Nombre en Portugués para icono 3', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre3_pt',$servicio->nombre3_pt, ['class' => 'form-control'])!!}
        </div>
        {{-- ************ --}}
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('Imagen','Icono 4 (Tamaño recomendado 267x191)', ['class' => 'control-label'])!!}
              
            {!! Form::file('imagen4', ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre4_es','Nombre en español para icono 4', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre4_es',$servicio->nombre4_es, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre4_en','Nombre en Inglés para icono 4', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre4_en',$servicio->nombre4_en, ['class' => 'form-control'])!!}
        </div>
        <div class="form-group col-sm-12 col-md-6 pad-panel" >
            {!!Form::label('nombre4_pt','Nombre en Portugués para icono 4', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('nombre4_pt',$servicio->nombre4_pt, ['class' => 'form-control'])!!}
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
    CKEDITOR.replace("nombre1_es");
    CKEDITOR.replace("nombre1_en");
    CKEDITOR.replace("nombre1_pt");
    CKEDITOR.replace("nombre2_es");
    CKEDITOR.replace("nombre2_en");
    CKEDITOR.replace("nombre2_pt");
    CKEDITOR.replace("nombre3_es");
    CKEDITOR.replace("nombre3_en");
    CKEDITOR.replace("nombre3_pt");
    CKEDITOR.replace("nombre4_es");
    CKEDITOR.replace("nombre4_en");
    CKEDITOR.replace("nombre4_pt");
    CKEDITOR.replace("contenido_es");
    CKEDITOR.replace("contenido_en");
    CKEDITOR.replace("contenido_pt");

    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';
</script>

@endsection