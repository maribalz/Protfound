<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\contenido_home;


class ContenidoHomeController extends Controller
{
    public function index()
    {
        $contenido= contenido_home::first();
        return view('adm.php.editarContenidosHome')->with('contenido',$contenido);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $contenido = contenido_home::find($id);

       return view('adm.php.editarContenidoHome')->with('contenido', $contenido);
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
    public function update_contenido(Request $request)
    {
        $id= contenido_home::all()->max('id');
        $newid= $id+1;

        $contenido=contenido_home::find($request->id);
        $contenido->texto=$request->texto;
        $contenido->texto_industria=$request->texto_industria;
        $contenido->titulo=$request->titulo;
        $contenido->sector1_texto=$request->sector1_texto;
        $contenido->sector2_texto=$request->sector2_texto;
        $contenido->sector3_texto=$request->sector3_texto;
        $contenido->sector4_texto=$request->sector4_texto;
        
        $contenido->link=$request->link;

        if ($request->hasFile('sector1')) {
            if ($request->file('sector1')->isValid()) {
                $file = $request->file('sector1');
                $path = public_path('imagenes/contenido_home/');
                $request->file('sector1')->move($path, $newid.'_'.$file->getClientOriginalName());
                $contenido->sector1 = 'imagenes/contenido_home/' . $newid.'_'.$file->getClientOriginalName();
            }
        }  
        if ($request->hasFile('sector2')) {
            if ($request->file('sector2')->isValid()) {
                $file = $request->file('sector2');
                $path = public_path('imagenes/contenido_home/');
                $request->file('sector2')->move($path, $newid.'_'.$file->getClientOriginalName());
                $contenido->sector2 = 'imagenes/contenido_home/' . $newid.'_'.$file->getClientOriginalName();
            }
        } 
        if ($request->hasFile('sector3')) {
            if ($request->file('sector3')->isValid()) {
                $file = $request->file('sector3');
                $path = public_path('imagenes/contenido_home/');
                $request->file('sector3')->move($path, $newid.'_'.$file->getClientOriginalName());
                $contenido->sector3 = 'imagenes/contenido_home/' . $newid.'_'.$file->getClientOriginalName();
            }
        } 
        if ($request->hasFile('sector4')) {
            if ($request->file('sector4')->isValid()) {
                $file = $request->file('sector4');
                $path = public_path('imagenes/contenido_home/');
                $request->file('sector4')->move($path, $newid.'_'.$file->getClientOriginalName());
                $contenido->sector4 = 'imagenes/contenido_home/' . $newid.'_'.$file->getClientOriginalName();
            }
        } 
        $contenido->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('contenidohome.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
