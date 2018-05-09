@extends('adm.cuerpo')

@section('titulo','Tabla- Productos')

@section('contenido')
<div class="row">
	<div class="col-xs-12 col-md-12 col-md-offset-">
		<div class="panel panel-default  col-sm-12">
            <div class="panel-heading">
                <h3 class="panel-title">Tabla <strong>{{$producto->nombre}}</strong></h3>
            </div>

    		@if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                  @endforeach
                </div>
            @endif
    {!! Form::open(['route' => 'tabla.store', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true])!!}
    {{ csrf_field() }}
        <br>
        <p>Para crear la Tabla de un producto deberá hacerlo del siguiente modo: <br>
        1. La primera fila serán los nombres de los campos de la tabla (de cada columna). <br>
        2. Luego podrás cargar los datos por filas. <br><br>
        <strong>NOTA</strong>: La <strong>columna 7</strong> estará destina al cálculo del precio del producto en Pesos (ARS), la <strong>columna 6</strong> estará destinada al cálcula del descuento en Dólares del producto (POR FAVOR RELLENAR ESTAS COLUMNAS CON UN GUIÓN - 6 Y 7), y la <strong> columna 5 </strong> deberá contener el precio del producto en dólares (US$) (usar puntos "." para marcar los decimáles).<br>
        <strong>Para el descuento</strong>, indique en la columna 6 los 3 descuentos que serán realizados a dicho producto, estos deben ser ingresados en número y separados por comas (,). Ejemplo: 50,10,10 (se aplicará un descuento del 50%, luego del 10% y por último otro descuento del 10%)<br>
        El <strong>máximo</strong> de columnas de la tabla es de 10 columnas, si quieres que la tabla sea de menos columnas, solo debes dejar las sobrantes en blanco. <br>
        </p><br>
        <table class="table table-condensed">
            <thead>
              <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th width="20%"></th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <td>
                        {!! Form::text('id_producto', $producto->id, ['class' => 'form-control novisi'])!!}

                        {!! Form::text('a', null , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('b', null , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('c', null , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('d', null , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('e', null , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('f', null , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('g', null , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('h', null , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('i', null , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('j', null , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>

                    <td>
                        <input class="btn btn-success" type="submit" style="float: none;margin-right: 0px;" value='Crear'/>
                    </td>
                  </tr>
            </tbody>
        </table>
         
    {!! Form::close() !!}

    <hr>

    {!! Form::open(['route' => 'tabla.update_tabla', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true])!!}
        
        <table class="table table-condensed">
            <thead>
              <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th width="20%">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($tablas as $tabla)
                  <tr>
                    <td>
                        {!! Form::text('id', $tabla->id, ['class' => 'form-control novisi'])!!}

                        {!! Form::text('a', $tabla->a , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('b', $tabla->b , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('c', $tabla->c , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('d', $tabla->d , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('e', $tabla->e , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('f', $tabla->f , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('g', $tabla->g , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('h', $tabla->h , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('i', $tabla->i , ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        {!! Form::text('j', $tabla->j, ['class' => 'form-control', 'placeholder' => ''])!!}
                    </td>
                    <td>
                        <input class="btn btn-xs btn-warning" type="submit" value='Editar'/>
                        <a href="{{ route('tabla.destroy',$tabla->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
         
      {!! Form::close() !!}
				
		</div>
	</div>	
</div>

@endsection