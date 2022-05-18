<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Facturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('facturas', function (Blueprint $table) {
            $table->id('fac_id');
            $table->date('fac_fecha');
            $table->foreignId('prov_id')->references('prov_id')->on('provedor');
            $table->float('fac_total');
            $table->integer('fac_tipo_pago');

            

            
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
