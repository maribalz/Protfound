<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\categoria;


class CategoriaController extends Controller
{
    public function index()
    {
        $categorias= categoria::orderBy('orden','asc')->get();
        return view('adm.php.editarCategorias')->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.php.crearCategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria= new categoria($request->all());
        $categoria->save();
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('categorias.index');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = categoria::find($id);
        return view('adm.php.editarCategoria')->with('categoria', $categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function update_categoria(Request $request)
    {
        $categoria=categoria::find($request->id);
        $categoria->nombre_es=$request->nombre_es;
        $categoria->nombre_en=$request->nombre_en;
        $categoria->nombre_pt=$request->nombre_pt;
        $categoria->orden=$request->orden;    
        $categoria->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('categorias.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria= categoria::find($id);
        $categoria -> delete();
        
        flash('Se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('categorias.index');
    }
}
