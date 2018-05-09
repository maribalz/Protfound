<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\datos_empresa;
use App\redes_social;
use App\Logo;
use App\familia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);

        $direccion= datos_empresa::where('tipo','direccion')->first();
        $tlf= datos_empresa::where('tipo','telefono')->first();
        $cel= datos_empresa::where('tipo','celular')->first();
        $email= datos_empresa::where('tipo','email')->first();
        // $redes= redes_social::orderBy('id','desc')->get();
        $redes2= redes_social::orderBy('id','asc')->get();
        $logofoot= Logo::where('tipo','footer')->first();
        $logohead= Logo::where('tipo','header')->first();
        $favicon= Logo::where('tipo','favicon')->first();
        view()->share([
            'direccion' => $direccion, 
            'tlf' => $tlf, 
            'email' => $email,
            'cel' => $cel,
            // 'redes2' => $redes2,
            'logohead' => $logohead,
            'favicon' => $favicon,
            'logofoot' => $logofoot
        ]); 
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
