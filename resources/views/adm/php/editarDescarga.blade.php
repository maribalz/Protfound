@extends('adm.cuerpo')



@section('titulo','Descargas')



@section('contenido')

<div class="row">

	<div class="col-xs-12 col-md-11 col-md-offset-2">

		<div class="panel panel-default  col-sm-8">

            <div class="panel-heading">

                <h3 class="panel-title">Editar descarga</h3>

            </div>

            @if(count($errors) > 0)

                <div class="alert alert-danger" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                  @foreach($errors->all() as $error)

                <p>{{$error}}</p>

                  @endforeach

                </div>

            @endif

    {!! Form::open([ 'route' => 'descargas.update_descarga', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true ])!!}

    {{ csrf_field() }}

        <div class="form-group col-sm-12 pad-panel" >

            {!! Form::text('id', $descarga->id, ['class' => 'form-control novisi'])!!}

        </div>
        <div class="form-group col-sm-12 pad-panel" >
            {!!Form::label('nombre','Nombre ', ['class' => 'control-label'])!!}
            {!! Form::text('nombre', $descarga->nombre, ['class' => 'form-control','required'])!!}
        </div>
        
        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('archivo','Archivo ', ['class' => 'control-label'])!!}

              

            {!! Form::file('archivo', ['class' => 'form-control'])!!}

           

        </div>
        

        <div class="form-group col-sm-12 pad-panel" >

            {!!Form::label('orden','Orden', ['class' => 'control-label'])!!}

              

            {!! Form::text('orden', $descarga->orden, ['class' => 'form-control', 'placeholder' => 'Ingrese un orden'])!!}

           

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



@endsection