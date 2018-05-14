<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Calidad;

class CalidadController extends Controller
{
   
    public function index()
    {
        $clientes= Calidad::all()->first();
        return redirect()->route('calidad.edit',$clientes->id);
    }

    
    public function create()
    {
       
    }

    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $cliente = Calidad::find($id);
        return view('adm.php.editarCalidad')->with('calidad', $cliente);
    }

    public function update_calidad(Request $request)
    {
        $cliente=Calidad::find($request->id);
        $cliente->texto1=$request->texto1; 
        $cliente->texto2=$request->texto2;

        if ($request->hasFile('certificado1')) {
            if ($request->file('certificado1')->isValid()) {
                $file = $request->file('certificado1');
                $path = public_path('imagenes/calidad/');
                $request->file('certificado1')->move($path.'_'.$file->getClientOriginalName());
                $cliente->certificado1 = 'imagenes/calidad/' .'_'.$file->getClientOriginalName();
            }
        }    
        if ($request->hasFile('certificado2')) {
            if ($request->file('certificado2')->isValid()) {
                $file = $request->file('certificado2');
                $path = public_path('imagenes/calidad/');
                $request->file('certificado2')->move($path.'_'.$file->getClientOriginalName());
                $cliente->certificado2 = 'imagenes/calidad/' .'_'.$file->getClientOriginalName();
            }
        }  
        $cliente->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('calidad.index');
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
   
    }
}
