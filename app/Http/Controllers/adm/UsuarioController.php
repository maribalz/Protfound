<?php

namespace App\Http\Controllers\adm;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\usuarioRequest;
use App\User;
use Illuminate\Support\Facades\Crypt;

class UsuarioController extends Controller
{
    public function index()
    {
    	$usuarios= User::orderBy('nombre','ASC')->get();
       	return view('adm.php.listaUsuarios')->with('usuarios',$usuarios);
    }
    
    public function create()
    {
        return view('adm.php.crearUsuario');
    }
    
    public function store(usuarioRequest $request)
    {
    	
        $usuario= new User($request->all());
        $usuario->password= \Hash::make($request->password);

        $usuario->save();
       	flash('Se ha registrado '. $usuario->nombre . ' de forma exitosa')->success()->important();
        return redirect()->route('usuario.index');
    }
    
    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
       $usuario = User::find($id);

       return view('adm.php.editarUsuario')->with('usuario', $usuario);
    }
    
    public function update(Request $request, $id)
    {
    	
    }
    public function update_usuario(Request $request)
    {
    	$usuario=User::find($request->id);
        $usuario->nombre=$request->nombre;
        if ($request->password!==null) {
        	$usuario->password=Crypt::encrypt($request->password);
        }
        
        $usuario->nivel=$request->nivel;
        $usuario->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('usuario.index');
    }
    
    public function destroy($id)
    {
        $usuarios= User::find($id);
        $usuarios -> delete();
        /* Bitácora 
        event(new BitacoraEvent($usuarios, 'Deshabilitar usuario'));*/
        flash('El usuario se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('usuario.index');
    }
    
}
