<?php

use Illuminate\Database\Seeder;
use App\maestro_tipo_equipamiento;
class maestro_tipo_equipamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          maestro_tipo_equipamiento::create([
        	'numtipequip'=>'001',
        	'nomtipequip'=>'Equipos de Rescate y Salvamento',
        	'user_id'=>'1'


        	]);
        maestro_tipo_equipamiento::create([
        	'numtipequip'=>'002',
        	'nomtipequip'=>'Equipos contra incendios',
        	'user_id'=>'1'


        	]);
    }
}
