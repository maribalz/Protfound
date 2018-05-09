<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\slider_home;
use App\slider_empresa;
use App\producto_destacado;
use App\metadato;
use App\contenido_empresa;
use App\contenido_home;
use App\datos_empresa;
use App\Http\Requests\Contacto;
use App\Http\Requests\PresupuestoRequest;
use App\Mail\Sendbymail;
use App\Mail\SendConsulta;
use Illuminate\Support\Facades\Mail;
use App\producto;
use App\Descarga;
use App\galeria;
use App\tabla;
use App\servicio;
use App\novedad;
use App\categoria;
use App\Cliente;
use App\Sector;
use App\Modelo;
use App\Relacion;
use App\Calidad;
use App;
use Config;
//use Mail; ----- mail presupuesto

class PaginasController extends Controller
{
    
    public function index()
    {
        $sliders= slider_home::orderBy('orden','ASC')->get();
        $destacados= producto_destacado::orderBy('orden')->get();
        $contenido= contenido_home::first();
        // Session::put('idioma', 'es');

        $metadato= metadato::where('seccion','home')->first();
        $active='home';
        return view('pages.home', [
            'sliders' => $sliders, 
            'destacados' => $destacados,
            'contenido' => $contenido,
            'metadato' => $metadato,
            'active' => $active
        ]);
    }

    public function idioma(Request $request,$idioma)
    {
        // echo Session::get('idioma');
        // Session::pull('idioma',$idioma);
        // echo "----";
        // echo Session::get('idioma');

        $request->session()->put('idioma', $idioma);


        return back();
    }

    public function empresa()
    {
        $sliders= slider_empresa::orderBy('orden','ASC')->get();
        
        $contenido= contenido_empresa::first();

        $metadato= metadato::where('seccion','empresa')->first();
        $active='empresa';
        return view('pages.empresa', [
            'sliders' => $sliders,
            'contenido' => $contenido, 
            'metadato' => $metadato,
            'active' => $active/*,
            'rows' => $rows*/
        ]);
    }
    public function clientes()
    {
        $sliders= Cliente::orderBy('orden','ASC')->get();
        $metadato= metadato::where('seccion','cliente')->first();
        $active='cliente';
        return view('pages.cliente', [
            'clientes' => $sliders, 
            'metadato' => $metadato,
            'active' => $active
        ]);
    }
    public function servicios()
    {
        $metadato= metadato::where('seccion','servicio')->first();
        $servicios = servicio::all()->first();
        $active='servicio';
        return view('pages.servicios', [
            'metadato' => $metadato,
            'active' => $active,
            'servicio' => $servicios
        ]);
    }

    public function contacto()
    {
    
        $metadato= metadato::where('seccion','contacto')->first();
        $active='contacto';
        return view('pages.contacto', [
            'metadato' => $metadato,
            'active' => $active/*,
            'rows' => $rows*/
        ]);
    }

    public function enviarmail(Contacto $request)
    {   
        
        $dato= datos_empresa::where('tipo','email')->first();
        $nombre= $request->nombre;
        $empresa= $request->empresa;
        $mensaje= $request->mensaje;
        $telefono= $request->telefono;
        $email= $request->email;
        


        Mail::to($dato->descripcion)->send(new Sendbymail($nombre,$email,$empresa,$mensaje,$telefono));
        if (Mail::failures()) {
            flash('Ha ocurrido un error.')->error()->important();
            return redirect()->route('contacto');
        }
        flash('El mensaje se ha enviado exitosamente.')->success()->important();
        return redirect()->route('contacto');
    }
    
    public function busca()
    {
        $busca=0;
        
        $metadato= metadato::where('seccion','home')->first();
        $active='buscar';
        return view('pages.buscador', [
            'busca' => $busca,
            'metadato' => $metadato,
            'active' => $active/*,
            'rows' => $rows*/
        ]);
    }
    public function buscador(Request $request)
    {
        $buscar= $request->busca;
        $productos= producto::where('nombre_es',$buscar)->orWhere('nombre_es','like','%'.$buscar.'%')->get();
        $busca=1;
        $metadato= metadato::where('seccion','home')->first();
        $active='buscar';
        return view('pages.buscador', [
            'busca' => $busca,
            'productos' => $productos,
            'metadato' => $metadato,
            'active' => $active
        ]);
    }
    public function descarga()
    {
        $descargas = Descarga::orderBy('orden')->get();
        
        $metadato= metadato::where('seccion','descargas')->first();
        $active='descargas';
        return view('pages.descargas', [
            'descargas' => $descargas,
            'metadato' => $metadato,
            'active' => $active/*,
            'rows' => $rows*/
        ]);
    }
    public function novedades()
    {
        $categorias = categoria::orderBy('orden','ASC')->get();
        $categorias2 = categoria::orderBy('orden','ASC')->get();
        $novedades = novedad::orderBy('orden','asc')->get();

        $metadato= metadato::where('seccion','novedades')->first();
        $active='novedades';
        return view('pages.novedades', [
            'metadato' => $metadato,
            'active' => $active,
            'categorias' => $categorias,
            'categorias2' => $categorias2,
            'novedades' => $novedades
        ]);
    }
    public function novedad($id)
    {
        $categorias = categoria::orderBy('orden','ASC')->get();
        $categorias2 = categoria::orderBy('orden','ASC')->get();
        $novedad = novedad::where('id',$id)->first();
        $categorianove= categoria::where('id',$novedad->id_categoria)->first();

        $metadato= metadato::where('seccion','novedades')->first();
        $active='novedades';
        return view('pages.novedad', [ 
            'metadato' => $metadato,
            'active' => $active,
            'categorias' => $categorias,
            'categorias2' => $categorias2,
            'novedad' => $novedad,
            'categorianove' => $categorianove
        ]);
    }
    
    public function productos($id)
    {
        $producto = producto::find($id);
        $metadato= metadato::where('seccion','productos')->first();
        $modelo = Modelo::where('id_producto',$id)->orderBy('orden','ASC')->get();
        $galeria = galeria::where('id_producto',$id)->orderby('orden','ASC')->get();
        $active='productos';
        return view('pages.productos', [
            'producto' => $producto,
            'metadato' => $metadato,
            'galerias' => $galeria,
            'modelos' => $modelo,
            'active' => $active
        ]);
    }
    public function sectores_productos($id){
        $relacion= Relacion::where('id_sector',$id)->get();
        $productos = producto::all();
        $metadato= metadato::where('seccion','sectores')->first();
        $active='productos';
        return view('pages.sectores_producto', [
            'relaciones' => $relacion,
            'productos' => $productos,
            'metadato' => $metadato,
            'active' => $active
        ]);
    }

    public function producto()
    {
        $productos= producto::all();
        $metadato= metadato::where('seccion','productos')->first();
        $active='productos';
        return view('pages.producto', [
            'productos' => $productos,
            'metadato' => $metadato,
            'active' => $active
        ]);
    }
    public function sectores()
    {
        $productos= Sector::all();
        $metadato= metadato::where('seccion','sectores')->first();
        $active='sectores';
        return view('pages.sectores', [
            'productos' => $productos,
            'metadato' => $metadato,
            'active' => $active
        ]);
    }
    public function calidad()
    {
        $calidad= Calidad::all()->first();
        $metadato= metadato::where('seccion','cliente')->first();
        $descargas = Descarga::orderBy('orden','ASC')->get();
        $active='calidad';
        return view('pages.calidad', [
            'calidad' => $calidad, 
            'metadato' => $metadato,
            'active' => $active,
            'descargas' => $descargas
        ]);
    }
    public function consulta($id)
    {
        $tabla = tabla::where('id',$id)->first();
        $metadato= metadato::where('seccion','contacto')->first();
        $active='productos';
        return view('pages.consulta', [
            'metadato' => $metadato,
            'active' => $active,
            'tabla' => $tabla
        ]);
    }
    public function enviarconsulta(Contacto $request)
    {   
        $tabla=tabla::where('id',$request->tabla)->first();

        $dato= datos_empresa::where('tipo','email')->first();
        $nombre= $request->nombre;
        $apellido= $request->apellido;
        $telefono= $request->telefono;
        $empresa= $request->empresa;
        $email= $request->email;
        $mensaje= $request->mensaje;

        


        Mail::to($dato->descripcion)->send(new SendConsulta($nombre,$apellido,$email,$empresa,$mensaje,$tabla));
        if (Mail::failures()) {
            flash('Ha ocurrido un error.')->error()->important();
            return redirect()->route('contacto');
        }
        flash('El mensaje se ha enviado exitosamente.')->success()->important();
        return redirect()->route('consulta',$tabla->id);
    }

    public function presupuesto()
    {
        $productos = producto::orderBy('orden')->get();
        
        $metadato= metadato::where('seccion','presupuesto')->first();
        $active='presupuesto';
        return view('pages.presupuesto', [
            'productos' => $productos,
            'metadato' => $metadato,
            'active' => $active/*,
            'rows' => $rows*/
        ]);
    }
    public function enviarpresupuesto(Request $request)
    {   
       
        $dato= datos_empresa::where('tipo','email')->first();
        $nombre= $request->nombre;
        $email= $request->email;
        $localidad= $request->localidad;
        $telefono= $request->telefono;
        $detalles= $request->detalles;
        $plano= $request->plano;
        
        
        $newid = producto::all()->max('id');
        $newid++;

        if ($request->hasFile('archivo')) {
            if ($request->file('archivo')->isValid()) {
                $file = $request->file('archivo');
                $path = public_path('imagenes/archivos/');
                $request->file('archivo')->move($path, $newid.'_'.$file->getClientOriginalName());
                $archivo = 'imagenes/archivos/' . $newid.'_'.$file->getClientOriginalName();
                
            }
        }

         Mail::send('pages.enviarpresupuesto', ['nombre' => $nombre, 'telefono' => $telefono, 'email' => $email, 'localidad' => $localidad, 'detalles' => $detalles, 'plano' => $plano], function ($message) use ($archivo){

            $message->from($dato->descripcion, 'Pitones Ferrite');

            $message->to($dato->descripcion);

            //Attach file
            $message->attach($archivo);

            //Add a subject
            $message->subject("Presupuesto");

        });
        if (Mail::failures()) {
            flash('Ha ocurrido un error.')->error()->important();
            return redirect()->route('presupuesto');
        }
        flash('El mensaje se ha enviado exitosamente.')->success()->important();
        return redirect()->route('presupuesto');
    }
}
