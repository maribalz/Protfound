<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\slider_home;
use App\Http\Requests\sliderRequest;

class SliderhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders= slider_home::orderBy('orden','ASC')->get();
        return view('adm.php.editarSlidersHome')->with('sliders',$sliders)
                                                ->with('seccion','home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.php.crearSlider')->with('seccion','home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(sliderRequest $request)
    {
        $id= slider_home::all()->max('id');
        $newid= $id+1;
        $slider= new slider_home($request->all());
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/slider_home/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $slider->imagen = 'imagenes/slider_home/' . $newid.'_'.$file->getClientOriginalName();
                $slider->save();
            }
        }
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('sliderhome.index');
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
        $slider = slider_home::find($id);

       return view('adm.php.editarSlider')->with('slider', $slider)
                                         ->with('seccion','home');
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
    public function update_slider(sliderRequest $request)
    {
        $id= slider_home::all()->max('id');
        $newid= $id+1;
        $slider=slider_home::find($request->id);
        $slider->texto=$request->texto;
        $slider->orden=$request->orden;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/slider_home/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $slider->imagen = 'imagenes/slider_home/' . $newid.'_'.$file->getClientOriginalName();
                $slider->save();
            }
        }
        
        $slider->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('sliderhome.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider= slider_home::find($id);
        $slider -> delete();
        
        flash('El slider se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('sliderhome.index');
    }
}
