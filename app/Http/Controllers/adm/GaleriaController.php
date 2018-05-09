<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\galeria;
use App\producto;

class GaleriaController extends Controller
{
    public function index($id)
    {
        $imagenes= galeria::where('id_producto',$id)->orderBy('orden','ASC')->get();
        $producto= producto::where('id',$id)->first();
        return view('adm.php.editarGalerias')->with('imagenes',$imagenes)->with('producto',$producto);
    }

    public function create($id)
    {
         $producto= producto::where('id',$id)->first();
        return view('adm.php.crearGaleria')->with('producto',$producto);
    }

    public function store(Request $request)
    {
        $id= galeria::all()->max('id');
        $newid= $id+1;
        $galeria= new galeria($request->all());
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/galeria/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $galeria->imagen = 'imagenes/galeria/' . $newid.'_'.$file->getClientOriginalName();
                $galeria->save();
            }
        }
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('galeria.index',$request->id_producto);
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $imagen = galeria::find($id);
        $producto = producto::where('id',$imagen->id_producto)->first();
        return view('adm.php.editarGaleria')->with('imagen', $imagen)
                                            ->with('producto', $producto);
    }

   
    public function update(Request $request, $id)
    {
        //
    }
    public function update_slider(Request $request)
    {
        $id= galeriap::all()->max('id');
        $newid= $id+1;
        $galeria=galeria::find($request->id);
        $galeria->orden=$request->orden;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/galeria/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $galeria->imagen = 'imagenes/galeria/' . $newid.'_'.$file->getClientOriginalName();
                $galeria->save();
            }
        }
        
        $galeria->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('galeria.index',$galeria->id_producto);
    }

   
    public function destroy($id)
    {
        $galeria= galeria::find($id);
        $galeria -> delete();
        
        flash('Se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('galeria.index',$galeria->id_producto);
    }
}
