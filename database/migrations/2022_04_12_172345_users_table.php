<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('use_id');
            $table->string('users')->unique();;
            $table->string('use_nombre');
            $table->string('use_apellido');
            $table->string('use_cedula');
            $table->string('use_direccion');
            $table->string('use_telefono');
            $table->string('email')->unique();
            $table->string('password');
            
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();

            
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
