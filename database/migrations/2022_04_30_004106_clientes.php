<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('cli_id');
            $table->string('cli_nombre');
            $table->string('cli_apellido');
            $table->string('cli_cedula');
            $table->string('cli_correo');
            $table->string('cli_telefono');
            $table->string('cli_direccion');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
