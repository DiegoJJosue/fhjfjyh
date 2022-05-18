<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'users'=>'Diego',
        	'use_nombre'=>'diego',
        	'use_apellido'=>'Lema',
        	'use_direccion'=>'nueva aurora',
        	'use_cedula'=>'1234567898',
        	'use_telefono'=>'0985924671',
        	'email'=>'diego@gmail.com',
        	'password'=>bcrypt('123456789'),
        	'created_at'=>date('2022-03-21'),
        	
        ]);
    }
}
