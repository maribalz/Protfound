<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;

class ClienteController extends Controller
{
   
    public function index()
    {
        $clientes= Cliente::orderBy('orden','asc')->get();
        return view('adm.php.editarClientes')->with('clientes',$clientes);
    }

    
    public function create()
    {
        return view('adm.php.crearCliente');
    }

    public function store(Request $request)
    {
        $cliente= new Cliente($request->all());
        $id= Cliente::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/clientes/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $cliente->imagen = 'imagenes/clientes/' . $newid.'_'.$file->getClientOriginalName();
            }
        }    
        $cliente->save();
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('clientes.index');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('adm.php.editarCliente')->with('cliente', $cliente);
    }

    public function update_cliente(Request $request)
    {
        $cliente=Cliente::find($request->id);
        $cliente->nombre=$request->nombre;
        $cliente->orden=$request->orden; 

        $id= Cliente::all()->max('id');
        $newid= $id+1;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/clientes/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $cliente->imagen = 'imagenes/clientes/' . $newid.'_'.$file->getClientOriginalName();
            }
        }    
        $cliente->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('clientes.index');
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        $cliente= Cliente::find($id);
        $cliente -> delete();
        
        flash('Se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('clientes.index');
    }
}
