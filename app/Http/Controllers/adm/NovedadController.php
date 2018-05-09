<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\novedad;
use App\categoria;
use App\Http\Requests\novedadRequest;

class NovedadController extends Controller
{
    
    public function index()
    {
        $categorias= categoria::all();
        $novedades= novedad::orderBy('orden','asc')->get();
        return view('adm.php.editarNovedades', compact('novedades','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias= categoria::orderBy('orden')->get();
        return view('adm.php.crearNovedad')->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(novedadRequest $request)
    {
        $id= novedad::all()->max('id');
        $newid= $id+1;
        $novedad= new novedad($request->all());
        
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/novedades/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $novedad->imagen = 'imagenes/novedades/' . $newid .'_'.$file->getClientOriginalName();
               // $novedad->save();
            }
        }
        if ($request->hasFile('imagen_maxi')) {
            if ($request->file('imagen_maxi')->isValid()) {
                $file = $request->file('imagen_maxi');
                $path = public_path('imagenes/novedades/');
                $request->file('imagen_maxi')->move($path, $newid.'_'.$file->getClientOriginalName());
                $novedad->imagen_maxi = 'imagenes/novedades/' . $newid .'_'.$file->getClientOriginalName();
               // $novedad->save();
            }
        }
        
        if ($request->hasFile('ficha_es')) {
            if ($request->file('ficha_es')->isValid()) {
                $file = $request->file('ficha_es');
                $path = public_path('imagenes/novedades/');
                $request->file('ficha_es')->move($path, $newid.'_'.$file->getClientOriginalName());
                $novedad->ficha_es = 'imagenes/novedades/' . $newid .'_'.$file->getClientOriginalName();
                
            }
        }
        if ($request->hasFile('ficha_en')) {
            if ($request->file('ficha_en')->isValid()) {
                $file = $request->file('ficha_en');
                $path = public_path('imagenes/novedades/');
                $request->file('ficha_en')->move($path, $newid.'_'.$file->getClientOriginalName());
                $novedad->ficha_en = 'imagenes/novedades/' . $newid .'_'.$file->getClientOriginalName();
                
            }
        }
        if ($request->hasFile('ficha_pt')) {
            if ($request->file('ficha_pt')->isValid()) {
                $file = $request->file('ficha_pt');
                $path = public_path('imagenes/novedades/');
                $request->file('ficha_pt')->move($path, $newid.'_'.$file->getClientOriginalName());
                $novedad->ficha_pt = 'imagenes/novedades/' . $newid .'_'.$file->getClientOriginalName();
                
            }
        }
        $novedad->save();
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('novedadm.index');
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
        $novedad = novedad::find($id);
        $categorias= categoria::orderBy('orden')->get();
        return view('adm.php.editarNovedad', [
                'novedad'=> $novedad,
                'categorias'=> $categorias
            ]);
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
    public function update_novedad(novedadRequest $request)
    {
        $id= novedad::all()->max('id');
        $newid= $id+1;
        $novedad= novedad::find($request->id);
        $novedad->nombre_es=$request->nombre_es;
        $novedad->nombre_en=$request->nombre_en;
        $novedad->nombre_pt=$request->nombre_pt;
        $novedad->fecha=$request->fecha;
        $novedad->texto_breve_es=$request->texto_breve_es;
        $novedad->texto_breve_en=$request->texto_breve_en;
        $novedad->texto_breve_pt=$request->texto_breve_pt;
        $novedad->texto_es=$request->texto_es;
        $novedad->texto_en=$request->texto_en;
        $novedad->texto_pt=$request->texto_pt;
        $novedad->id_categoria=$request->id_categoria;
        $novedad->orden=$request->orden;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/novedades/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $novedad->imagen = 'imagenes/novedades/' . $newid .'_'.$file->getClientOriginalName();
               // $novedad->save();
            }
        }
        if ($request->hasFile('imagen_maxi')) {
            if ($request->file('imagen_maxi')->isValid()) {
                $file = $request->file('imagen_maxi');
                $path = public_path('imagenes/novedades/');
                $request->file('imagen_maxi')->move($path, $newid.'_'.$file->getClientOriginalName());
                $novedad->imagen_maxi = 'imagenes/novedades/' . $newid .'_'.$file->getClientOriginalName();
               // $novedad->save();
            }
        }
        if ($request->hasFile('ficha_es')) {
            if ($request->file('ficha_es')->isValid()) {
                $file = $request->file('ficha_es');
                $path = public_path('imagenes/novedades/');
                $request->file('ficha_es')->move($path, $newid.'_'.$file->getClientOriginalName());
                $novedad->ficha_es = 'imagenes/novedades/' . $newid .'_'.$file->getClientOriginalName();
                
            }
        }
        if ($request->hasFile('ficha_en')) {
            if ($request->file('ficha_en')->isValid()) {
                $file = $request->file('ficha_en');
                $path = public_path('imagenes/novedades/');
                $request->file('ficha_en')->move($path, $newid.'_'.$file->getClientOriginalName());
                $novedad->ficha_en = 'imagenes/novedades/' . $newid .'_'.$file->getClientOriginalName();
                
            }
        }
        if ($request->hasFile('ficha_pt')) {
            if ($request->file('ficha_pt')->isValid()) {
                $file = $request->file('ficha_pt');
                $path = public_path('imagenes/novedades/');
                $request->file('ficha_pt')->move($path, $newid.'_'.$file->getClientOriginalName());
                $novedad->ficha_pt = 'imagenes/novedades/' . $newid .'_'.$file->getClientOriginalName();
                
            }
        }
        $novedad->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('novedadm.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $novedad= novedad::find($id);
        $novedad -> delete();
        
        flash('Se ha actualizado correctamente.')->success()->important();
        return redirect()->route('novedadm.index');
    }
}
