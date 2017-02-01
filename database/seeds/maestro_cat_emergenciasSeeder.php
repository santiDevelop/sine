<?php

use Illuminate\Database\Seeder;
use App\maestro_cat_emergencia;
class maestro_cat_emergenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       maestro_cat_emergencia::create([
        	'numcatemerg'=>'001',
        	'nomcatemerg'=>'Incendio',
        	'user_id'=>'1'


        	]);
        maestro_cat_emergencia::create([
        	'numcatemerg'=>'002',
        	'nomcatemerg'=>'Rescate',
        	'user_id'=>'1'


        	]);
    }
}
