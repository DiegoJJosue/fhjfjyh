<?php

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
        	'cli_nombre'=>'Mario',
        	'cli_apellido'=>'perez',
        	'cli_cedula'=>'658741338',
        	'cli_correo'=>'mario@vn.com',
        	'cli_telefono'=>'54782179',
        	'cli_direccion'=>'Villaflora',
        	
        ]); 
    }
}
