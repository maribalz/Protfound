@extends('adm.cuerpo')

@section('titulo','Novedades')

@section('contenido')
<div class="row">
	<div class="col-xs-12 col-md-10 col-md-offset-2">
		<div class="panel panel-default  col-sm-8">
            <div class="panel-heading">
                <h3 class="panel-title">Editar Novedad</h3>
            </div>
            @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                  @endforeach
                </div>
            @endif
    {!! Form::open([ 'route' => 'novedadm.update_novedad', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true ])!!}
    {{ csrf_field() }}
        <div class="form-group col-sm-12 pad-panel" >
            {!! Form::text('id', $novedad->id, ['class' => 'form-control novisi'])!!}
            {!!Form::label('nombre_es','Nombre Es', ['class' => 'control-label'])!!}
              
            {!! Form::text('nombre_es', $novedad->nombre_es , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la novedad', 'required', 'maxlenght' => '200'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre_en','Nombre En', ['class' => 'control-label'])!!}
              
            {!! Form::text('nombre_en', $novedad->nombre_en , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la novedad', 'required', 'maxlenght' => '200'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre_pt','Nombre Pt', ['class' => 'control-label'])!!}
              
            {!! Form::text('nombre_pt', $novedad->nombre_pt , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la novedad', 'required', 'maxlenght' => '200'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('imagen','Imagen (Tamaño recomendado 403x223)', ['class' => 'control-label'])!!}
              
            {!! Form::file('imagen', ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('imagen_maxi','Imagen (novedad)(Tamaño recomendado 847x468)', ['class' => 'control-label'])!!}
              
            {!! Form::file('imagen_maxi', ['class' => 'form-control'])!!}
           
        </div>
         <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('ficha_es','Archivo (PDF) Es', ['class' => 'control-label'])!!}
              
            {!! Form::file('ficha_es', ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('ficha_en','Archivo (PDF) En', ['class' => 'control-label'])!!}
              
            {!! Form::file('ficha_en', ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('ficha_pt','Archivo (PDF) Pt', ['class' => 'control-label'])!!}
              
            {!! Form::file('ficha_pt', ['class' => 'form-control'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('fecha','Fecha', ['class' => 'control-label'])!!}
              
            {!! Form::text('fecha', $novedad->fecha , ['class' => 'form-control', 'placeholder' => '', 'required','maxlenght' => '30'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto_breve_es','Descripción breve Es', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('texto_breve_es',$novedad->texto_breve_es, ['class' => 'form-control', 'maxlenght' => '2000', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto_breve_en','Descripción breve En', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('texto_breve_en',$novedad->texto_breve_en, ['class' => 'form-control', 'maxlenght' => '2000', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto_breve_pt','Descripción breve Pt', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('texto_breve_pt',$novedad->texto_breve_pt, ['class' => 'form-control', 'maxlenght' => '2000', 'required'])!!}
           
        </div>

        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto_es','Texto Es', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('texto_es',$novedad->texto_es, ['class' => 'form-control', 'maxlenght' => '4000', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto_en','Texto En', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('texto_en',$novedad->texto_en, ['class' => 'form-control', 'maxlenght' => '4000', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('texto_pt','Texto Pt', ['class' => 'control-label'])!!}
              
            {!! Form::textarea('texto_pt',$novedad->texto_pt, ['class' => 'form-control', 'maxlenght' => '4000', 'required'])!!}
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('orden','Categoría', ['class' => 'control-label'])!!}
              
           	<select class="form-control" name="id_categoria">
           		@foreach($categorias as $categoria)
                   @if($categoria->id == $novedad->id_categoria)
                    <option value="{{$categoria->id}}" selected>{{$categoria->nombre_es}}</option>
                   @else 
           			<option value="{{$categoria->id}}">{{$categoria->nombre_es}}</option>
                   @endif 
           		@endforeach
           	</select>
           
        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('orden','Orden', ['class' => 'control-label'])!!}
              
            {!! Form::text('orden', $novedad->orden, ['class' => 'form-control', 'placeholder' => 'Ingrese un orden', 'required'])!!}
           
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
    CKEDITOR.replace("texto_breve_es");
    CKEDITOR.replace("texto_breve_en");
    CKEDITOR.replace("texto_breve_pt");
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';
</script>

@endsection