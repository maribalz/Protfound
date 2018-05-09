<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\servicio;

class ServicioController extends Controller
{
    
    public function index()
    {
        $servicios= servicio::all()->first();      
        return redirect()->route('servicios.edit', $servicios->id);
    }

   
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
    
    }

    public function edit($id)
    {
        $servicio = servicio::find($id);
        return view('adm.php.editarServicios')->with('servicio', $servicio);
    }
    
    public function update(Request $request, $id)
    {

        $servicio = servicio::find($id);
        $servicio->nombre1_es = $request->nombre1_es;
        $servicio->nombre1_en= $request->nombre1_en;
        $servicio->nombre1_pt= $request->nombre1_pt;

        $servicio->nombre2_es= $request->nombre2_es;
        $servicio->nombre2_en= $request->nombre2_en;
        $servicio->nombre2_pt= $request->nombre2_pt;

        $servicio->nombre3_es= $request->nombre3_es;
        $servicio->nombre3_en= $request->nombre3_en;
        $servicio->nombre3_pt= $request->nombre3_pt;

        $servicio->nombre4_es= $request->nombre4_es;
        $servicio->nombre4_en= $request->nombre4_en;
        $servicio->nombre4_pt= $request->nombre4_pt;

        $servicio->contenido_es= $request->contenido_es;
        $servicio->contenido_en= $request->contenido_en;
        $servicio->contenido_pt= $request->contenido_pt;

        $id= servicio::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('imagen1')) {
            if ($request->file('imagen1')->isValid()) {
                $file = $request->file('imagen1');
                $path = public_path('imagenes/servicio/');
                $request->file('imagen1')->move($path, $newid.'_'.$file->getClientOriginalName());
                $servicio->imagen1 = 'imagenes/servicio/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('imagen2')) {
            if ($request->file('imagen2')->isValid()) {
                $file = $request->file('imagen2');
                $path = public_path('imagenes/servicio/');
                $request->file('imagen2')->move($path, $newid.'_'.$file->getClientOriginalName());
                $servicio->imagen2 = 'imagenes/servicio/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('imagen3')) {
            if ($request->file('imagen3')->isValid()) {
                $file = $request->file('imagen3');
                $path = public_path('imagenes/servicio/');
                $request->file('imagen3')->move($path, $newid.'_'.$file->getClientOriginalName());
                $servicio->imagen3 = 'imagenes/servicio/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('imagen4')) {
            if ($request->file('imagen4')->isValid()) {
                $file = $request->file('imagen4');
                $path = public_path('imagenes/servicio/');
                $request->file('imagen4')->move($path, $newid.'_'.$file->getClientOriginalName());
                $servicio->imagen4 = 'imagenes/servicio/' . $newid.'_'.$file->getClientOriginalName();
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
