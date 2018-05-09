<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\metadato;
use App\categoria;
use App\novedad;
class BuscarController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $buscar = $request->busca;

        $categorias = categoria::orderBy('orden','ASC')->get();

        $categorias2 = categoria::orderBy('orden','ASC')->get();
        $novedades = novedad::where('nombre_es',$buscar)->orWhere('nombre_es','like','%'.$buscar.'%')->get();

        $metadato= metadato::where('seccion','novedades')->first();
        $active='novedades';
        return view('pages.novedades', [
            'metadato' => $metadato,
            'active' => $active,
            'categorias' => $categorias,
            'categorias2' => $categorias2,
            'novedades' => $novedades
        ]);
    }
    
    public function show($id)
    {
    	
        $categorias = categoria::where('id',$id)->orderBy('orden','ASC')->get();
        $categorias2 = categoria::orderBy('orden','ASC')->get();
        $novedades = novedad::orderBy('orden','ASC')->get();

        $metadato= metadato::where('seccion','novedades')->first();
        $active='novedades';
        return view('pages.novedades', [
            'metadato' => $metadato,
            'active' => $active,
            'categorias' => $categorias,
            'categorias2' => $categorias2,
            'novedades' => $novedades
        ]);
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
