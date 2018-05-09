<?php

namespace App\Http\Controllers\adm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Logo;
class LogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos= Logo::orderBy('tipo','ASC')->get();
        return view('adm.php.listaLogos')->with('logos',$logos);
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logo = Logo::find($id);

        return view('adm.php.editarLogo')->with('logo', $logo);
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
    public function update_logo(Request $request)
    {
        $logo=Logo::find($request->id);
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/logos/');
                if ($logo->tipo==='favicon') {
                    $request->file('imagen')->move($path, 'favicon.png');
                    $logo->ruta = 'imagenes/logos/favicon.png' ;
                }else{
                    $request->file('imagen')->move($path, $logo->id.'_'.$file->getClientOriginalName());
                    $logo->ruta = 'imagenes/logos/' . $logo->id.'_'.$file->getClientOriginalName();
                }
                $logo->save();
            }
        }

        /*$logo->save();*/
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('logos.index');
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
