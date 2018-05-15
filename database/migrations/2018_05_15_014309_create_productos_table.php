<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',300);
            $table->string('imagen',400);
            $table->string('descripcion',2000);
            $table->text('texto');
            $table->string('video',400);
            $table->string('texto_video',1000);
            $table->string('ficha',400);
            $table->string('id_familia',40);
            $table->string('orden',50);
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
        Schema::dropIfExists('productos');
    }
}
