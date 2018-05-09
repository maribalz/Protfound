@extends('adm.cuerpo')



@section('titulo','Familias')



@section('contenido')

<div class="row">

	<div class="col-xs-12 col-md-11 col-md-offset-2">

		<div class="panel panel-default  col-sm-8">

            <div class="panel-heading">

                <h3 class="panel-title">Editar familia</h3>

            </div>

            @if(count($errors) > 0)

                <div class="alert alert-danger" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  @foreach($errors->all() as $error)

                <p>{{$error}}</p>

                  @endforeach

                </div>

            @endif

    {!! Form::open([ 'route' => 'familia.update_familia', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true ])!!}

    {{ csrf_field() }}

        <div class="form-group col-sm-12 pad-panel" >

            {!! Form::text('id', $familia->id, ['class' => 'form-control novisi'])!!}

            {!!Form::label('nombre_es','Nombre Español', ['class' => 'control-label'])!!}


            {!! Form::text('nombre_es', $familia->nombre_es , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del familia', 'required'])!!}
        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('nombre_en','Nombre Inglés', ['class' => 'control-label'])!!}


            {!! Form::text('nombre_en', $familia->nombre_en , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del familia', 'required'])!!}
        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('nombre_pt','Nombre Portugués', ['class' => 'control-label'])!!}


            {!! Form::text('nombre_pt', $familia->nombre_pt , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del familia', 'required'])!!}
        </div>
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('Imagen','Imagen (Tamaño recomendado 362x311)', ['class' => 'control-label'])!!}
            {!! Form::file('imagen', ['class' => 'form-control'])!!}
        </div>


        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('orden','Orden', ['class' => 'control-label'])!!}

              

            {!! Form::text('orden', $familia->orden, ['class' => 'form-control', 'placeholder' => 'Ingrese un orden'])!!}

           

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



@endsection