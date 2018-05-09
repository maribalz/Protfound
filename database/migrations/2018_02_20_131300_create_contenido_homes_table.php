<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContenidoHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido_homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',300);
            $table->string('texto',3000);
            $table->string('link',500);
            $table->string('texto_industria',3000);
            $table->string('sector1_texto',1000);
            $table->string('sector2_texto',1000);
            $table->string('sector3_texto',1000);
            $table->string('sector4_texto',1000);
            $table->string('sector1',500);
            $table->string('sector2',500);
            $table->string('sector3',500);
            $table->string('sector4',500);

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
        Schema::dropIfExists('contenido_homes');
    }
}
