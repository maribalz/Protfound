<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\servicio;

class ServicioController extends Controller
{
    
    public function index()
    {
        $servicios= servicio::all();      
        return view('adm.php.editarServicios')->with('servicios',$servicios);
    }

   
    public function create()
    {
        return view('adm.php.crearServicio');
        
    }

   
    public function store(Request $request)
    {
        $servicio= new servicio($request->all());

        $id= servicio::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/servicio/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $servicio->imagen = 'imagenes/servicio/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        
        $servicio->save();

        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('servicios.index');
    }

    
    public function show($id)
    {
    
    }

    public function edit($id)
    {
        $servicio = servicio::find($id);
        return view('adm.php.editarServicio')->with('servicio', $servicio);
    }
    
    public function update(Request $request, $id)
    {

        $servicio = servicio::find($id);
        $servicio->texto = $request->texto;
        $servicio->orden= $request->orden;

        $id= servicio::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/servicio/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $servicio->imagen = 'imagenes/servicio/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        
        $servicio->save();

        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('servicios.index');
    }

    
    public function destroy($id)
    {
    }
}
