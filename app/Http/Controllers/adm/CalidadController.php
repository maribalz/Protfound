<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calidad;

class CalidadController extends Controller
{
   
    public function index()
    {
        $clientes= Calidad::all()->first();
        return redirect()->route('calidad.edit',$clientes->id);
    }

    
    public function create()
    {
        return view('adm.php.crearCalidad');
    }

    public function store(Request $request)
    {
        $cliente= new Calidad($request->all());
        $cliente->save();
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('calidad.index');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $cliente = Calidad::find($id);
        return view('adm.php.editarCalidad')->with('calidad', $cliente);
    }

    public function update_calidad(Request $request)
    {
        $cliente=Calidad::find($request->id);
        $cliente->contenido_es=$request->contenido_es;
        $cliente->contenido_en=$request->contenido_en;
        $cliente->contenido_pt=$request->contenido_pt;  
        $cliente->titulo_es=$request->titulo_es;
        $cliente->titulo_en=$request->titulo_en;
        $cliente->titulo_pt=$request->titulo_pt;    
        $cliente->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('calidad.index');
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        $cliente= Calidad::find($id);
        $cliente -> delete();
        
        flash('Se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('calidad.index');
    }
}
