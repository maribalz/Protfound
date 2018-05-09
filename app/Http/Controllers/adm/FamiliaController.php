<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Familia;
class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Familia::orderBy('orden','asc')->get();
        return view('adm.php.editarFamilias')->with('familias',$productos);
    }

    public function create()
    {
        return view('adm.php.crearFamilia');
    }

    public function store(Request $request)
    {
        $producto= new Familia($request->all());

        $id= Familia::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/producto/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->imagen = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        $producto->save();
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('familia.index');
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
        $producto = Familia::find($id);
        return view('adm.php.editarFamilia')->with('familia', $producto);
    }

    public function update(Request $request, $id)
    {
    }
    public function update_familia(Request $request)
    {
        $producto= Familia::find($request->id);
        $producto->nombre_es= $request->nombre_es;
        $producto->nombre_en= $request->nombre_en;
        $producto->nombre_pt= $request->nombre_pt;
        $producto->orden= $request->orden;

        $id= Familia::all()->max('id');
        $newid= $id+1;

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/producto/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->imagen = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        $producto->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('familia.index');
    }

    
    public function destroy($id)
    {
        $producto= Familia::find($id);
        $producto -> delete();
        
        flash('Se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('familia.index');
    }
}
