<?php

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class provedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provedor')->insert([
        	'prov_nombre'=>'Juan',
        	'prov_direccion'=>'Guamani',
        	'prov_telefono'=>'123456789',	
        ]);

        DB::table('provedor')->insert([
        	'prov_nombre'=>'Maria',
        	'prov_direccion'=>'Foresta',
        	'prov_telefono'=>'987654321',	
        ]);
    }
}
