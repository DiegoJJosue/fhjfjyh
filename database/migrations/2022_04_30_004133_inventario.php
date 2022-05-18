<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->id('inv_id');
            $table->foreignId('prod_id')->references('prod_id')->on('productos');
            $table->foreignId('prov_id')->references('prov_id')->on('provedor');
            $table->string('inv_cantidad');
            $table->foreignId('bod_id')->references('bod_id')->on('bodega');
            

            
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
