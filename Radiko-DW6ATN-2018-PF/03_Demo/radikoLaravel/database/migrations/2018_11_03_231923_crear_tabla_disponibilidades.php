<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDisponibilidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidades', function(Blueprint $table) {
            $table->increments('id');
            $table->string('zona', 45);
            $table->enum('dias', ['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sábado', 'domingo']);
            $table->datetime('inicio');
            $table->datetime('final');
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
        Schema::dropIfExists('disponibilidades');
    }
}
