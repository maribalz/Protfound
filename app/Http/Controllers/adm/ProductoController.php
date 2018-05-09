<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\producto;
use App\familia;
use App\Relacion;
use App\Sector;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= producto::orderBy('orden','asc')->get();
        return view('adm.php.editarProductos')->with('productos',$productos);
    }

    public function create()
    {
        $sectores=Sector::orderBy('orden','ASC')->get();
        return view('adm.php.crearProducto')->with('sectores',$sectores);
    }

    public function store(Request $request)
    {
        $producto= new producto($request->all());
        $producto->nombre_es = $request->nombre_es;
        $producto->nombre_en = $request->nombre_en;
        $producto->nombre_pt = $request->nombre_pt;
        $producto->contenido_es = $request->contenido_es;
        $producto->contenido_en = $request->contenido_en;
        $producto->contenido_pt = $request->contenido_pt;

        $producto->orden= $request->orden;
        $id= producto::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/producto/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->imagen = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('ficha_es')) {
            if ($request->file('ficha_es')->isValid()) {
                $file = $request->file('ficha_es');
                $path = public_path('imagenes/producto/');
                $request->file('ficha_es')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->ficha_es = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('ficha_en')) {
            if ($request->file('ficha_en')->isValid()) {
                $file = $request->file('ficha_en');
                $path = public_path('imagenes/producto/');
                $request->file('ficha_en')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->ficha_en = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('ficha_pt')) {
            if ($request->file('ficha_pt')->isValid()) {
                $file = $request->file('ficha_pt');
                $path = public_path('imagenes/producto/');
                $request->file('ficha_pt')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->ficha_pt = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        $producto->save();
        foreach ($request->id_sector as $sec) {
            $sector = new Relacion();
            $sector->id_producto=$producto->id;
            $sector->id_sector=$sec;
            $sector->save();
        }
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('producto.index');
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
        $producto = producto::find($id);
        $relaciones = Relacion::where('id_producto',$id)->get();
        $sectores=Sector::orderBy('orden','ASC')->get();
        return view('adm.php.editarProducto')->with('producto', $producto)
                                            ->with('relaciones',$relaciones)
                                            ->with('sectores',$sectores);
    }

    public function update(Request $request, $id)
    {
        $producto= producto::find($id);
        $producto->nombre_es= $request->nombre_es;
        $producto->nombre_en= $request->nombre_en;
        $producto->nombre_pt= $request->nombre_pt;
        $producto->contenido_es = $request->contenido_es;
        $producto->contenido_en = $request->contenido_en;
        $producto->contenido_pt = $request->contenido_pt;
        $producto->orden= $request->orden;

        $id= producto::all()->max('id');
        $newid= $id+1;

        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/producto/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->imagen = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('ficha_es')) {
            if ($request->file('ficha_es')->isValid()) {
                $file = $request->file('ficha_es');
                $path = public_path('imagenes/producto/');
                $request->file('ficha_es')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->ficha_es = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('ficha_en')) {
            if ($request->file('ficha_en')->isValid()) {
                $file = $request->file('ficha_en');
                $path = public_path('imagenes/producto/');
                $request->file('ficha_en')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->ficha_en = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        if ($request->hasFile('ficha_pt')) {
            if ($request->file('ficha_pt')->isValid()) {
                $file = $request->file('ficha_pt');
                $path = public_path('imagenes/producto/');
                $request->file('ficha_pt')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->ficha_pt = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
     
        $producto->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('producto.index');
    }

    
    public function destroy($id)
    {
        $producto= producto::find($id);
        $relacion = Relacion::where('id_producto',$producto->id)->get();
        foreach ($relacion as $rela) {
            $rela->delete();
        }
        $producto -> delete();
        
        flash('Se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('producto.index');
    }
}
