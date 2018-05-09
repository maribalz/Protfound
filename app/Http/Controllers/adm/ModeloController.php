<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modelo;
use App\producto;
class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
    public function index_modelo($id)
    {
        $mod=producto::find($id);
        $modelo= Modelo::where('id_producto',$id)->get();
        return view('adm.php.editarModelos')->with('modelos',$modelo)
                                            ->with('mod',$mod);
    }
    public function create()
    {
        
    }
    public function create_modelo($id)
    {
        $producto = producto::find($id);
        return view('adm.php.crearModelo')->with('producto',$producto);
    }
    public function store(Request $request)
    {
        $producto= new Modelo($request->all());
        $producto->titulo_es = $request->titulo_es;
        $producto->titulo_en = $request->titulo_en;
        $producto->titulo_pt = $request->titulo_pt;
        $producto->contenido_es = $request->contenido_es;
        $producto->contenido_en = $request->contenido_en;
        $producto->contenido_pt = $request->contenido_pt;
        $producto->orden= $request->orden;
        $producto->id_producto= $request->id_producto;
        
        $producto->save();
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('modelo.index_modelo',$producto->id_producto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $producto = Modelo::find($id);
        return view('adm.php.editarModelo')->with('producto', $producto);
    }

    public function update(Request $request, $id)
    {
        $producto= Modelo::find($id);
        $producto->titulo_es = $request->titulo_es;
        $producto->titulo_en = $request->titulo_en;
        $producto->titulo_pt = $request->titulo_pt;
        $producto->contenido_es = $request->contenido_es;
        $producto->contenido_en = $request->contenido_en;
        $producto->contenido_pt = $request->contenido_pt;
        $producto->orden= $request->orden;
     
        $producto->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('modelo.index_modelo',$producto->id_producto);
    }

    
    public function destroy($id)
    {
        $producto= Modelo::find($id);
        $producto -> delete();
        
        flash('Se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('producto.index');
    }
}
