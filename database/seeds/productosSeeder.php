<?php

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
        	'prod_nombre'=>'TV Smart',
        	'prod_codigo'=>'0001',
        	'prod_precio'=>'150',
        ]);
        DB::table('productos')->insert([
        	'prod_nombre'=>'Refrigeradora',
        	'prod_codigo'=>'0002',
        	'prod_precio'=>'250',
        ]);
        DB::table('productos')->insert([
        	'prod_nombre'=>'Lavadora',
        	'prod_codigo'=>'0003',
        	'prod_precio'=>'400',
        ]);
    }
}
