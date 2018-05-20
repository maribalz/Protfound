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
use App\Familia;
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
        $metadato= metadato::where('seccion','clientes')->first();
        $active='clientes';
        return view('pages.cliente', [
            'clientes' => $sliders, 
            'metadato' => $metadato,
            'active' => $active
        ]);
    }
    public function servicio()
    {
        $metadato= metadato::where('seccion','servicios')->first();
        $servicios = servicio::orderBy('orden')->get();
        $active='servicios';
        return view('pages.servicios', [
            'metadato' => $metadato,
            'active' => $active,
            'servicios' => $servicios
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
        $productos= producto::where('nombre',$buscar)->orWhere('nombre','like','%'.$buscar.'%')->get();
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
    
    public function familias()
    {
        $productos= Familia::orderBy('orden')->get();
        $metadato= metadato::where('seccion','productos')->first();
        $active='productos';
        return view('pages.familias', [
            'productos' => $productos,
            'metadato' => $metadato,
            'active' => $active
        ]);
    }
    public function productos($id)
    {
        $productos = producto::where('id_familia',$id)->orderBy('orden')->get();
        $familia = Familia::find($id);
        $familias = Familia::orderBy('orden')->get();
        $metadato= metadato::where('seccion','productos')->first();
        //$galeria = galeria::where('id_producto',$id)->orderby('orden','ASC')->get();
        $active='productos';
        return view('pages.productos', [
            'productos' => $productos,
            'familia' => $familia,
            'familias' => $familias,
            'metadato' => $metadato,
            'active' => $active
        ]);
    }

    public function producto($id)
    {
        $producto = producto::where('id',$id)->first();

        $productos = producto::where('id_familia',$producto->id_familia)->orderBy('orden')->get();
        $familia = Familia::find($producto->id_familia);
        $familias = Familia::orderBy('orden')->get();
        $metadato= metadato::where('seccion','productos')->first();
        $galerias = galeria::where('id_producto',$id)->orderby('orden','ASC')->get();
        $active='productos';
        return view('pages.producto', [
            'productos' => $productos,
            'producto' => $producto,
            'galerias' => $galerias,
            'familia' => $familia,
            'familias' => $familias,
            'metadato' => $metadato,
            'active' => $active
        ]);
    }

    public function calidad()
    {
        $calidad= Calidad::all()->first();
        $metadato= metadato::where('seccion','calidad')->first();
        $active='calidad';
        return view('pages.calidad', [
            'contenido' => $calidad, 
            'metadato' => $metadato,
            'active' => $active
        ]);
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

         Mail::send('pages.enviarpresupuesto', ['nombre' => $nombre, 'telefono' => $telefono, 'email' => $email, 'localidad' => $localidad, 'detalles' => $detalles], function ($message) use ($archivo){

            $message->from($dato->descripcion, 'Protfund');

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
