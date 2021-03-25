<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('id_cliente',7)->primary();
            $table->integer('id_ciudad')->references('id_ciudad')->on('ciudad');
            $table->string('cli_nombres',50);
            $table->string('cli_apellido',50);
            $table->string('cli_direccion',20);
            $table->string('cli_telefono',20);
            $table->integer('id_equipo')->references('id_equipo')->on('equipos');
            $table->string('cli_email',50);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
