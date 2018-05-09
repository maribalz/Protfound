<?php

namespace App\Http\Controllers\adm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\metadato;

class MetadatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metadatos= metadato::orderBy('seccion','ASC')->get();
        return view('adm.php.listaMetadatos')->with('metadatos',$metadatos);
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
        $metadato = metadato::find($id);

       return view('adm.php.editarMetadato')->with('metadato', $metadato);
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
    public function update_metadato(Request $request)
    {
        $metadato=metadato::find($request->id);
        $metadato->keywords=$request->keywords;
        $metadato->description=$request->description;
        $metadato->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('metadato.index');
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
