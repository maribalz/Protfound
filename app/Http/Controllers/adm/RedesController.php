<?php

namespace App\Http\Controllers\adm;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\redes_social;

class RedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redes= redes_social::orderBy('nombre','ASC')->get();
        return view('adm.php.listaRedes')->with('redes',$redes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.php.crearRed');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $red= new redes_social($request->all());
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/redes/');
                $request->file('imagen')->move($path, $red->id.'_'.$file->getClientOriginalName());
                $red->logo = 'imagenes/redes/' . $red->id.'_'.$file->getClientOriginalName();
                $red->save();
            }
        }
        flash('Se ha registrado '. $red->nombre . ' de forma exitosa')->success()->important();
        return redirect()->route('redes.index');
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
        $red = redes_social::find($id);

       return view('adm.php.editarRed')->with('red', $red);
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
    public function update_redes(Request $request)
    {
        $red=redes_social::find($request->id);
        $red->nombre=$request->nombre;
        $red->link=$request->link;
        $red->ubicacion=$request->ubicacion;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/redes/');
                $request->file('imagen')->move($path, $red->id.'_'.$file->getClientOriginalName());
                $red->logo = 'imagenes/redes/' . $red->id.'_'.$file->getClientOriginalName();
                $red->save();
            }
        }
        
        $red->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('redes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $redes= redes_social::find($id);
        $redes -> delete();
        
        flash('La red social se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('redes.index');
    }
}
