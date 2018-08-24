<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion')->nullable();
            $table->unsignedinteger('categoria_id')->nullable();
            $table->unsignedinteger('destino_id')->nullable();
            $table->unsignedinteger('promocion_id')->nullable();
            $table->unsignedinteger('banco_id')->nullable();
            $table->unsignedinteger('proveedor_id')->nullable();
            $table->boolean('destacado')->default(0);
            $table->string('imagen_url')->nullable();
            $table->string('incluye')->nullable();
            $table->string('itinerario')->nullable();
            $table->string('terminos')->nullable();
            $table->string('precios')->nullable();
            $table->string('dias')->nullable();
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
        Schema::dropIfExists('paquetes');
    }
}
