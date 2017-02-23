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
        	'nomestacion'=>'Estacion Caraballeda',
        	'mcbombero_id'=>'2',
        	'user_id'=>'1'


        	]);

         CrearEstaciones::create([
            'numestacion'=>'002',
            'nomestacion'=>'Estacion Parque cristal',
            'mcbombero_id'=>'1',
            'user_id'=>'1'


            ]);
    }
}
