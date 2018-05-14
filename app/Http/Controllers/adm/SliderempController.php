<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\slider_empresa;
use App\Http\Requests\sliderRequest;

class SliderempController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders= slider_empresa::orderBy('orden','ASC')->get();
        return view('adm.php.editarSlidersHome')->with('sliders',$sliders)
                                                ->with('seccion','emp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.php.crearSlider')->with('seccion','emp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(sliderRequest $request)
    {
        $id= slider_empresa::all()->max('id');
        $newid= $id+1;
        $slider= new slider_empresa($request->all());
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/slider_empresa/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $slider->imagen = 'imagenes/slider_empresa/' . $newid.'_'.$file->getClientOriginalName();
                $slider->save();
            }
        }
        flash('Se ha registrado de forma exitosa')->success()->important();
        return redirect()->route('slideremp.index');
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
        $slider = slider_empresa::find($id);

       return view('adm.php.editarSlider')->with('slider', $slider)
                                         ->with('seccion','emp');
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
        $id= slider_empresa::all()->max('id');
        $newid= $id+1;
        $slider=slider_empresa::find($request->id);
        $slider->texto=$request->texto;
        $slider->orden=$request->orden;
        if ($request->hasFile('imagen')) {
            if ($request->file('imagen')->isValid()) {
                $file = $request->file('imagen');
                $path = public_path('imagenes/slider_empresa/');
                $request->file('imagen')->move($path, $newid.'_'.$file->getClientOriginalName());
                $slider->imagen = 'imagenes/slider_empresa/' . $newid.'_'.$file->getClientOriginalName();
                $slider->save();
            }
        }
        
        $slider->save();
        
        flash('Se ha actualizado de forma exitosa')->success()->important();
        return redirect()->route('slideremp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider= slider_empresa::find($id);
        $slider -> delete();
        
        flash('El slider se ha eliminado exitosamente.')->success()->important();
        return redirect()->route('slideremp.index');
    }
}
