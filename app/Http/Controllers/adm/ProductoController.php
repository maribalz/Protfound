<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\producto;
use App\familia;
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
        $familias= familia::all();
        return view('adm.php.editarProductos')->with('productos',$productos)
                                    ->with('familias',$familias);
    }

    public function create()
    {
        $familias=familia::orderBy('orden','ASC')->get();
        return view('adm.php.crearProducto')->with('familias',$familias);
    }

    public function store(Request $request)
    {
        $producto= new producto($request->all());
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->texto = $request->texto;
        $producto->texto_video = $request->texto_video;
        $producto->video = $request->video;
        $producto->id_familia = $request->id_familia;
        $producto->orden = $request->orden;

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
        if ($request->hasFile('ficha')) {
            if ($request->file('ficha')->isValid()) {
                $file = $request->file('ficha');
                $path = public_path('imagenes/producto/');
                $request->file('ficha')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->ficha = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        
        $producto->save();
        
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
        $familias = familia::orderBy('orden')->get();
        return view('adm.php.editarProducto')->with('producto', $producto)
                                            ->with('familias',$familias);
    }

    public function update(Request $request, $id)
    {
        $producto= producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->texto = $request->texto;
        $producto->texto_video = $request->texto_video;
        $producto->video = $request->video;
        $producto->id_familia = $request->id_familia;
        $producto->orden = $request->orden;

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
        if ($request->hasFile('ficha')) {
            if ($request->file('ficha')->isValid()) {
                $file = $request->file('ficha');
                $path = public_path('imagenes/producto/');
                $request->file('ficha')->move($path, $newid.'_'.$file->getClientOriginalName());
                $producto->ficha = 'imagenes/producto/' . $newid.'_'.$file->getClientOriginalName();
            }
        }
        $producto->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('producto.index');
    }

    
    public function destroy($id)
    {
        $producto= producto::find($id);
        $producto -> delete();
        
        flash('Se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('producto.index');
    }
}
