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
            {!!Form::label('titulo','Título Es', ['class' => 'control-label'])!!}
              
            {!! Form::text('titulo_es', $contenido->titulo_es, ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('titulo','Título En', ['class' => 'control-label'])!!}
              
            {!! Form::text('titulo_en', $contenido->titulo_en, ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('titulo','Título Pt', ['class' => 'control-label'])!!}
              
            {!! Form::text('titulo_pt', $contenido->titulo_pt, ['class' => 'form-control'])!!}
           
        </div>

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto','Texto Es', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('texto_es',$contenido->texto_es, ['class' => 'form-control'])!!}
           
        </div>

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto','Texto En', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('texto_en',$contenido->texto_en, ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto','Texto Pt', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('texto_pt',$contenido->texto_pt, ['class' => 'form-control'])!!}
           
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
    CKEDITOR.replace("texto_es");
    CKEDITOR.replace("texto_en");
    CKEDITOR.replace("texto_pt");
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';
</script>

@endsection