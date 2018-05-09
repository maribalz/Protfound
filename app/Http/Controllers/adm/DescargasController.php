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
        if ($request->hasFile('archivo_es')) {
            if ($request->file('archivo_es')->isValid()) {
                $file = $request->file('archivo_es');
                $path = public_path('imagenes/descarga/');
                $request->file('archivo_es')->move($path, $newid.'_'.$file->getClientOriginalName());
                $descarga->archivo_es = 'imagenes/descarga/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('archivo_en')) {
            if ($request->file('archivo_en')->isValid()) {
                $file = $request->file('archivo_en');
                $path = public_path('imagenes/descarga/');
                $request->file('archivo_en')->move($path, $newid.'_'.$file->getClientOriginalName());
                $descarga->archivo_en = 'imagenes/descarga/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('archivo_pt')) {
            if ($request->file('archivo_pt')->isValid()) {
                $file = $request->file('archivo_pt');
                $path = public_path('imagenes/descarga/');
                $request->file('archivo_pt')->move($path, $newid.'_'.$file->getClientOriginalName());
                $descarga->archivo_pt = 'imagenes/descarga/' . $newid.'_'.$file->getClientOriginalName();
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
        $descarga->nombre_es= $request->nombre_es;
        $descarga->nombre_en= $request->nombre_en;
        $descarga->nombre_pt= $request->nombre_pt;
        $descarga->orden= $request->orden;

        $id= Descarga::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('archivo_es')) {
            if ($request->file('archivo_es')->isValid()) {
                $file = $request->file('archivo_es');
                $path = public_path('imagenes/descarga/');
                $request->file('archivo_es')->move($path, $newid.'_'.$file->getClientOriginalName());
                $descarga->archivo_es = 'imagenes/descarga/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('archivo_en')) {
            if ($request->file('archivo_en')->isValid()) {
                $file = $request->file('archivo_en');
                $path = public_path('imagenes/descarga/');
                $request->file('archivo_en')->move($path, $newid.'_'.$file->getClientOriginalName());
                $descarga->archivo_en = 'imagenes/descarga/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('archivo_pt')) {
            if ($request->file('archivo_pt')->isValid()) {
                $file = $request->file('archivo_pt');
                $path = public_path('imagenes/descarga/');
                $request->file('archivo_pt')->move($path, $newid.'_'.$file->getClientOriginalName());
                $descarga->archivo_pt = 'imagenes/descarga/' . $newid.'_'.$file->getClientOriginalName();
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
