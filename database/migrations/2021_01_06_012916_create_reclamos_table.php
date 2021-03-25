<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamos', function (Blueprint $table) {
            $table->string('id_reclamo',7)->primary();
            $table->integer('id_cliente')->references('id_cliente')->on('clientes');
            $table->integer('id_usuario')->references('id_usuario')->on('funcionarios');
            $table->string('obs_reclamo',500);
            $table->dateTime('re_fecha');
            $table->integer('id_estado')->references('id_estado')->on('estado_reclamos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamos');
    }
}
