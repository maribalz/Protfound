<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/','PaginasController');
Route::get('/{idioma}/idioma',[
				'uses'=>'PaginasController@idioma',
				'as'=>'idioma'
		]);
Route::get('/empresa',[
				'uses'=>'PaginasController@empresa',
				'as'=>'empresa'
		]);

Route::get('/servicio',[
				'uses'=>'PaginasController@servicio',
				'as'=>'servicio'
		]);
Route::get('/clientes',[
				'uses'=>'PaginasController@clientes',
				'as'=>'clientes'
		]);
Route::get('/calidadind',[
				'uses'=>'PaginasController@calidad',
				'as'=>'calidadind'
		]);
Route::get('/contacto',[
				'uses'=>'PaginasController@contacto',
				'as'=>'contacto'
		]);
Route::post('contacto/enviarmail',[
				'uses'=>'PaginasController@enviarmail',
				'as'=>'contacto.enviarmail'
		]);
Route::get('/busca',[
				'uses'=>'PaginasController@busca',
				'as'=>'busca'
		]);
Route::post('/buscador',[
				'uses'=>'PaginasController@buscador',
				'as'=>'buscador'
		]);
Route::get('/novedades',[
				'uses'=>'PaginasController@novedades',
				'as'=>'novedades'
		]);
Route::get('/{id}/novedad',[
				'uses'=>'PaginasController@novedad',
				'as'=>'novedad'
		]);
Route::resource('buscarnove','BuscarController');
Route::get('/descargas',[
				'uses'=>'PaginasController@descarga',
				'as'=>'descarga'
		]);

Route::get('productos/{id}/producto',[
				'uses'=>'PaginasController@productos',
				'as'=>'producto'
		]);
Route::get('productos',[
				'uses'=>'PaginasController@producto',
				'as'=>'productos'
		]);
Route::get('sectores',[
				'uses'=>'PaginasController@sectores',
				'as'=>'sectores'
		]);
Route::get('sectores/{id}/productos',[
				'uses'=>'PaginasController@sectores_productos',
				'as'=>'sectores.productos'
		]);
Route::get('producto/{id}/consulta',[
				'uses'=>'PaginasController@consulta',
				'as'=>'consulta'
		]);
Route::post('consulta/enviarconsulta',[
				'uses'=>'PaginasController@enviarconsulta',
				'as'=>'consulta.enviarconsulta'
		]);
Route::get('/presupuesto',[
				'uses'=>'PaginasController@presupuesto',
				'as'=>'presupuesto'
		]);
Route::post('presupuesto/enviar',[
				'uses'=>'PaginasController@enviarpresupuesto',
				'as'=>'enviarpresupuesto'
		]);

/*--------------------------------------Administrador---------------------------------*/

Route::group(['prefix' => 'adm'],function(){
	Route::get('login', function () {  //PAGINA LOGIN
	    return view('adm.login');
	});

 	Route::resource('login','adm\LoginController'); //CONTROLADOR LOGIN
	Route::post('login/login',[
				'uses'=>'adm\LoginController@login',
				'as'=>'adm.login'
    ]);
});


Route::group(['prefix' => 'adm', 'middleware' => 'admin'], function(){ /*Grupo de rutas para el ADM */
	
    Route::get('/', function () {
		    return view('adm.index');
	});

    Route::resource('usuario','adm\UsuarioController'); //CONTROLADOR tabla usuario
    Route::get('usuario/{id}/destroy',[
				'uses'=>'adm\UsuarioController@destroy',
				'as'=>'usuario.destroy'
		]);
	Route::post('usuario/update-usuario',[
				'uses'=>'adm\UsuarioController@update_usuario',
				'as'=>'usuario.update_usuario'
    ]);

    Route::resource('metadato','adm\MetadatoController'); //CONTROLADOR tabla metadato
	Route::post('metadato/update-metadato',[
				'uses'=>'adm\MetadatoController@update_metadato',
				'as'=>'metadato.update_metadato'
    ]);

    Route::resource('datos','adm\DatosController'); //CONTROLADOR tabla Datos empresa
	Route::post('datos/update-dato',[
				'uses'=>'adm\DatosController@update_dato',
				'as'=>'datos.update_dato'
    ]);

    Route::resource('datos','adm\DatosController'); //CONTROLADOR tabla Datos empresa
	Route::post('datos/update-dato',[
				'uses'=>'adm\DatosController@update_dato',
				'as'=>'datos.update_dato'
    ]);

    Route::resource('logos','adm\LogosController'); //CONTROLADOR tabla Datos empresa
	Route::post('logos/update-logo',[
				'uses'=>'adm\LogosController@update_logo',
				'as'=>'logos.update_logo'
    ]);

    Route::resource('redes','adm\RedesController'); //CONTROLADOR tabla usuario
    Route::get('redes/{id}/destroy',[
				'uses'=>'adm\RedesController@destroy',
				'as'=>'redes.destroy'
		]);
	Route::post('redes/update-redes',[
				'uses'=>'adm\RedesController@update_redes',
				'as'=>'redes.update_redes'
    ]);

/*--------------------------------------------------------------------------------*/
    Route::resource('sliderhome','adm\SliderhomeController'); //CONTROLADOR tabla usuario
    Route::get('sliderhome/{id}/destroy',[
				'uses'=>'adm\SliderhomeController@destroy',
				'as'=>'sliderhome.destroy'
		]);
	Route::post('sliderhome/update-slider',[
				'uses'=>'adm\SliderhomeController@update_slider',
				'as'=>'sliderhome.update_slider'
    ]);

   
    Route::resource('destacados','adm\DestacadosController'); //CONTROLADOR tabla Destacados
	Route::post('destacados/update-destacado',[
				'uses'=>'adm\DestacadosController@update_destacado',
				'as'=>'destacados.update_destacado'
    ]);

	Route::resource('contenidohome','adm\ContenidoHomeController'); //CONTROLADOR tabla Contenido 
	Route::post('contenidohome/update-contenido',[				  //  Empresa
				'uses'=>'adm\ContenidoHomeController@update_contenido',
				'as'=>'contenidohome.update_contenido'
    ]);

/*-----------------------------------------EMPRESA--------------------------------*/
	Route::resource('slideremp','adm\SliderempController'); //CONTROLADOR tabla Slider Home
    Route::get('slideremp/{id}/destroy',[
				'uses'=>'adm\SliderempController@destroy',
				'as'=>'slideremp.destroy'
		]);
	Route::post('slideremp/update-slider',[
				'uses'=>'adm\SliderempController@update_slider',
				'as'=>'slideremp.update_slider'
    ]);


    Route::resource('contenidoemp','adm\contenidoEmpController'); //CONTROLADOR tabla Contenido 
	Route::post('contenidoemp/update-contenido',[				  //  Empresa
				'uses'=>'adm\contenidoEmpController@update_contenido',
				'as'=>'contenidoemp.update_contenido'
    ]);

/*---------------------------------------PRODUCTOS-------------------------------------------*/
	

	Route::resource('producto','adm\ProductoController'); //CONTROLADOR tabla Contenido 
    Route::get('producto/{id}/destroy',[
				'uses'=>'adm\ProductoController@destroy',
				'as'=>'producto.destroy'
	]);

    Route::resource('galeria','adm\GaleriaController');
    Route::get('galeria/{id}/destroy',[
				'uses'=>'adm\GaleriaController@destroy',
				'as'=>'galeria.destroy'
		]);
    Route::get('galeria/{id}/index',[
				'uses'=>'adm\GaleriaController@index',
				'as'=>'galeria.index'
		]);
    Route::get('galeria/{id}/create',[
				'uses'=>'adm\GaleriaController@create',
				'as'=>'galeria.create'
		]);
	Route::post('galeria/update-slider',[
				'uses'=>'adm\GaleriaController@update_slider',
				'as'=>'galeria.update_slider'
    ]);


/*-------------------------------------SERVICIOS-------------------------------------------*/
	Route::resource('descargas','adm\DescargasController'); //CONTROLADOR tabla Contenido 
	Route::post('descargas/update-descargas',[				  //  Empresa
				'uses'=>'adm\DescargasController@update_descarga',
				'as'=>'descargas.update_descarga'
    ]);
/*---------------------------------------NOVEDADES-------------------------------------------*/
	Route::resource('categorias','adm\CategoriaController'); //CONTROLADOR tabla Categorias
    Route::get('categorias/{id}/destroy',[
				'uses'=>'adm\CategoriaController@destroy',
				'as'=>'categorias.destroy'
		]);
	Route::post('categorias/update-slider',[
				'uses'=>'adm\CategoriaController@update_categoria',
				'as'=>'categorias.update_categoria'
    ]);

	Route::resource('novedadm','adm\NovedadController'); //CONTROLADOR tabla Novedades
    Route::get('novedadm/{id}/destroy',[
				'uses'=>'adm\NovedadController@destroy',
				'as'=>'novedadm.destroy'
		]);
	Route::post('novedadm/update-slider',[
				'uses'=>'adm\NovedadController@update_novedad',
				'as'=>'novedadm.update_novedad'
    ]);
/*---------------------------------------Clientes-------------------------------------------*/
	

	Route::resource('clientes','adm\ClienteController'); //CONTROLADOR tabla Contenido 
	Route::post('clientes/update-clientes',[				  //  Empresa
				'uses'=>'adm\ClienteController@update_cliente',
				'as'=>'clientes.update_cliente'
    ]);
    Route::get('clientes/{id}/destroy',[
				'uses'=>'adm\ClienteController@destroy',
				'as'=>'clientes.destroy'
	]);	
	/*--------------------------------------Familia-------------------------------------------*/
	

	Route::resource('familia','adm\FamiliaController'); //CONTROLADOR tabla Contenido 
	Route::post('familia/update-clientes',[				  //  Empresa
				'uses'=>'adm\FamiliaController@update_familia',
				'as'=>'familia.update_familia'
    ]);
    Route::get('familia/{id}/destroy',[
				'uses'=>'adm\FamiliaController@destroy',
				'as'=>'familia.destroy'
	]);	
	/*---------------------------------------Calidad-------------------------------------------*/
	

	Route::resource('calidad','adm\CalidadController'); //CONTROLADOR tabla Contenido 
	Route::post('calidad/update-calidad',[				  //  Empresa
				'uses'=>'adm\CalidadController@update_calidad',
				'as'=>'calidad.update_calidad'
    ]);
    Route::get('calidad/{id}/destroy',[
				'uses'=>'adm\CalidadController@destroy',
				'as'=>'calidad.destroy'
	]);	
/*----------------------------SERVICIOS---------------------*/
	Route::resource('sectores','adm\SectorController');
/*----------------------------SERVICIOS---------------------*/
	Route::resource('servicios','adm\ServicioController');
/*----------------------------Calidad---------------------*/
	Route::resource('calidad','adm\CalidadController');
/*----------------------------MODELOS---------------------*/
	Route::resource('modelo','adm\ModeloController');
	Route::get('modelo/{id}/index',[
			'uses'=>'adm\ModeloController@index_modelo',
			'as'=>'modelo.index_modelo'
	]);
	Route::get('modelo/{id}/create',[
			'uses'=>'adm\ModeloController@create_modelo',
			'as'=>'modelo.create_modelo'
	]);
});


Auth::routes();

