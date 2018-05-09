<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\producto_destacado;
use App\novedad;
use App\Http\Requests\DestacadoRequest;

class DestacadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destacados= producto_destacado::orderBy('id','ASC')->get();
       
        return view('adm.php.editarDestacados')->with('destacados',$destacados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
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
        $destacado = producto_destacado::find($id);
        

       return view('adm.php.editarDestacado')->with('destacado', $destacado);
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
    public function update_destacado(DestacadoRequest $request)
    {
        $destacado=producto_destacado::find($request->id);
        $destacado->nombre_es=$request->nombre_es;
        $destacado->nombre_en=$request->nombre_en;
        $destacado->nombre_pt=$request->nombre_pt;
        $destacado->texto_es=$request->texto_es;
        $destacado->texto_en=$request->texto_en;
        $destacado->texto_pt=$request->texto_pt;
        $destacado->link=$request->link;
        $destacado->orden=$request->orden;

        $id= producto_destacado::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/destacados/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $destacado->imagen = 'imagenes/destacados/' . $newid.'_'.$file->getClientOriginalName();
            }
        }

        $destacado->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('destacados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
