<?php

use Illuminate\Database\Seeder;
use App\CrearEstaciones;
class crear_estacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         CrearEstaciones::create([
        	'numestacion'=>'001',
        	'nomestacion'=>'Curso Administrativo de Incendio',
        	'mcbombero_id'=>'2',
        	'user_id'=>'1'


        	]);
    }
}