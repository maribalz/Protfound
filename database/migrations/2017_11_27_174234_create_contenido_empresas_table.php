<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidoEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido_empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',300);
            $table->string('texto1',4000);
            $table->string('texto2',4000);
            $table->string('imagen',400);
            $table->string('video',400);
            $table->string('texto_video',1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenido_empresas');
    }
}
