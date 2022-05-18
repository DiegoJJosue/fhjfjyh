<?php

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class inventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventario')->insert([
        	'prod_id'=>'1',
        	'prov_id'=>'1',
        	'inv_cantidad'=>'5',	
        	'bod_id'=>'1',	
        ]);
        DB::table('inventario')->insert([
        	'prod_id'=>'2',
        	'prov_id'=>'1',
        	'inv_cantidad'=>'5',	
        	'bod_id'=>'1',	
        ]);
        DB::table('inventario')->insert([
        	'prod_id'=>'3',
        	'prov_id'=>'2',
        	'inv_cantidad'=>'5',	
        	'bod_id'=>'2',	
        ]);
    }
}
