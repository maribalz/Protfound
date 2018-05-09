<?php

namespace App\Http\Controllers\adm;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Logo;
use Laracast\Flash\Flash;
use App\Http\Requests\loginRequest;

class LoginController extends Controller
{
    public function index()
    {
    	$logo= Logo::where('tipo','header')->first();
        
        return view('adm.login')
        		->with('logo',$logo);
    }
    public function login(loginRequest $request)
    {
    	if (Auth::attempt(['usuario' => $request->usuario, 'password' => $request->password])) {
            $favicon= Logo::where('tipo','favicon')->first();
            return view('adm.index')->with('favicon',$favicon);
        }
        else{
           flash('Ha ocurrido un error! Intentelo de nuevo.')->error()->important();
           return redirect()->route('login.index');
        }
    }
   
    public function create()
    {
            Auth::logout();
         
        return redirect()->route('login.index');
    }
    
    public function store(usuarioRequest $request)
    {
    }
    
    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
    }
    
    public function update(Request $request, $id)
    {
        
    }
    
    public function destroy($id)
    {
    }
}
