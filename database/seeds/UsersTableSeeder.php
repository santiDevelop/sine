<?php

use Illuminate\Database\Seeder;
use App\User;  // hay que incluir el namespace 
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'user'=>'administrador',
        	'status'=>'1',
			'name'=>'Usuario Administrador',
			'cedula'=>'999',
			'cargo'=>'3',
			'typeuser'=>'1',
			'cbombero'=>'1',
			'password'=>bcrypt('123456')

        	]);
           User::create([
        	'user'=>'usuario',
        	'status'=>'1',
			'name'=>'Usuario Regular',
			'cedula'=>'999',
			'cargo'=>'3',
			'typeuser'=>'2',
			'cbombero'=>'1',
			'password'=>bcrypt('123456')

        	]);
            User::create([
            'user'=>'jefe',
            'status'=>'1',
            'name'=>'jefe',
            'cedula'=>'999',
            'cargo'=>'3',
            'typeuser'=>'3',
            'cbombero'=>'1',
            'password'=>bcrypt('123456')

            ]);
             User::create([
            'user'=>'fonbe',
            'status'=>'1',
            'name'=>'fonbe',
            'cedula'=>'999',
            'cargo'=>'3',
            'typeuser'=>'4',
            'cbombero'=>'1',
            'password'=>bcrypt('123456')

            ]);
    }
}

