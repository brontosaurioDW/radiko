<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDirecciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function(Blueprint $table) {
            $table->increments('id');
            $table->string('referencia', 50);
            // $table->string('tipo');
            $table->string('calle', 100);
            $table->string('numero', 45);
            $table->string('piso', 10);
            $table->string('departamento', 10);
            $table->string('telefono', 20);
            $table->string('aclaracion', 255);
            $table->softDeletes();
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
        Schema::dropIfExists('direcciones');
    }
}
