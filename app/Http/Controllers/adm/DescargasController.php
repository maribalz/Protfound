<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Descarga;

class DescargasController extends Controller
{
    
    public function index()
    {
         $descargas= Descarga::orderBy('orden','asc')->get();      
        return view('adm.php.editarDescargas')->with('descargas',$descargas);
    }

    public function create()
    {
        return view('adm.php.crearDescarga');
    }

    
    public function store(Request $request)
    {
        $descarga= new Descarga($request->all());
        $id= Descarga::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('archivo')) {
            if ($request->file('archivo')->isValid()) {
                $file = $request->file('archivo');
                $path = public_path('imagenes/descarga/');
                $request->file('archivo')->move($path, $newid.'_'.$file->getClientOriginalName());
                $descarga->archivo = 'imagenes/descarga/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        
        $descarga->save();
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('descargas.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $descarga = Descarga::find($id);
        return view('adm.php.editarDescarga')->with('descarga', $descarga);
    }

    public function update_descarga(Request $request)
    {
        $descarga= Descarga::find($request->id);
        $descarga->nombre= $request->nombre;
        $descarga->orden= $request->orden;

        $id= Descarga::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('archivo')) {
            if ($request->file('archivo')->isValid()) {
                $file = $request->file('archivo');
                $path = public_path('imagenes/descarga/');
                $request->file('archivo')->move($path, $newid.'_'.$file->getClientOriginalName());
                $descarga->archivo = 'imagenes/descarga/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
       
        $descarga->save();

        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('descargas.index');
    }

   
    public function destroy($id)
    {
        $descarga= Descarga::find($id);
        $descarga -> delete();
        
        flash('Se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('descargas.index');
    }
}
