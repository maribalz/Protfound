<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoDestacadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_destacados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen',400);
            $table->string('nombre',100);
            $table->float('precio')->nullable();
            $table->string('orden',10);
            $table->string('link',400)->nullable();
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
        Schema::dropIfExists('producto_destacados');
    }
}
