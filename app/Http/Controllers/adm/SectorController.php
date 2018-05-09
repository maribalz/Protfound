<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sector;
class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sector= Sector::orderBy('orden','asc')->get();
        return view('adm.php.editarSectores')->with('sectores',$sector);
    }

    public function create()
    {
        return view('adm.php.crearSectores');
    }

    public function store(Request $request)
    {
        $producto= new Sector($request->all());
        $producto->titulo_es = $request->titulo_es;
        $producto->titulo_en = $request->titulo_en;
        $producto->titulo_pt = $request->titulo_pt;
        $producto->orden= $request->orden;
        $id= Sector::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/sector/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->imagen = 'imagenes/sector/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        
        $producto->save();
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('sectores.index');
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
        $producto = Sector::find($id);
        return view('adm.php.editarSector')->with('producto', $producto);
    }

    public function update(Request $request, $id)
    {
        $producto= Sector::find($id);
        $producto->titulo_es = $request->titulo_es;
        $producto->titulo_en = $request->titulo_en;
        $producto->titulo_pt = $request->titulo_pt;
        $producto->orden= $request->orden;

        $id= Sector::all()->max('id');
        $newid= $id+1;

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/sector/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->imagen = 'imagenes/sector/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
     
        $producto->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('sectores.index');
    }

    
    public function destroy($id)
    {
        $producto= Sector::find($id);
        $producto -> delete();
        
        flash('Se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('sectores.index');
    }
}
