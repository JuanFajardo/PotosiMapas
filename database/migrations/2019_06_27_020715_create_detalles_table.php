<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
	         $table->increments('id');
	         $table->string('imagen');
	         $table->string('titulo')->comment('Unidad educativa');
           $table->string('estado')->nullable()->comment('linea/punto');
	         $table->text('descripcion')->comment('Detalle de la informacion');
	         $table->string('color');
	         $table->integer('id_boton');
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
        Schema::dropIfExists('detalles');
    }
}
