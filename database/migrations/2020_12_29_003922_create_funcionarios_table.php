<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->string('cedula',7)->primary();
            $table->integer('id_usuario')->references('id')->on('users')->unique();
            $table->string('fun_nombre',50);
            $table->string('fun_apellido',50);
            $table->string('fun_direccion',20)->nullable();
            $table->string('fun_telefono',20);
            $table->string('fun_email',50)->nullable();
            $table->string('estado',100)->nullable();
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
