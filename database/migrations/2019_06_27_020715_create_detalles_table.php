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
           $table->string('departamento')->nullable()->default(null);
           $table->string('provincia')->nullable()->default(null);
           $table->string('distrito')->nullable()->default(null);
           $table->string('zona')->nullable()->default(null);
           $table->string('superficie_construida')->nullable()->default('0');
           $table->string('superficie_terreno')->nullable()->default('0');
           $table->string('monto_total')->nullable()->default('0');
           $table->string('monto_upre')->nullable()->default('0');
           $table->string('monto_gamp')->nullable()->default('0');
           $table->string('estaodo')->nullable()->default(null);
           $table->string('plazo')->nullable()->default('0');
           $table->string('descripcion')->comment('Detalle de la informacion');
           $table->string('beneficiario_estudiante')->nullable()->default('0');
	         $table->text('descripcion');
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
