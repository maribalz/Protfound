<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contenido_empresa;

class contenidoEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contenido= contenido_empresa::first();
        return view('adm.php.editarContenidosEmp')->with('contenido',$contenido);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $contenido = contenido_empresa::find($id);

       return view('adm.php.editarContenidoEmp')->with('contenido', $contenido);
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
    public function update_contenido(Request $request)
    {
        $id= contenido_empresa::all()->max('id');
        $newid= $id+1;

        $contenido=contenido_empresa::find($request->id);
        $contenido->texto_es=$request->texto_es;
        $contenido->texto_en=$request->texto_en;
        $contenido->texto_pt=$request->texto_pt;
        $contenido->titulo_es=$request->titulo_es;
        $contenido->titulo_en=$request->titulo_en;
        $contenido->titulo_pt=$request->titulo_pt;

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/contenido_empresa/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $contenido->imagen = 'imagenes/contenido_empresa/' . $newid.'_'.$file->getClientOriginalName();
            }
        } 
          
        $contenido->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('contenidoemp.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
