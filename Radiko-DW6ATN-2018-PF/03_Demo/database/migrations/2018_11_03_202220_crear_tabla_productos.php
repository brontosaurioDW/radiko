<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProductos extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('productos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('producto', 100);
            $table->text('descripcion', 1000);
            $table->string('marca', 45);
            $table->decimal('precio', 6, 2);
            $table->string('foto', 255);
            $table->tinyInteger('estado');
            $table->unsignedInteger('huerta_id');
            $table->unsignedInteger('unidad_de_medida_id');            
            $table->unsignedInteger('categoria_id');            
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
        Schema::dropIfExists('productos');
    }
}