<?php

use Illuminate\Database\Seeder;
use App\maestro_perfiles_cargos;
class maestro_perfiles_cargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          maestro_perfiles_cargos::create([
        	'numpcargo'=>'001',
        	'nompcargo'=>'Comandante',
        	'user_id'=>'1'


        	]);
        maestro_perfiles_cargos::create([
        	'numpcargo'=>'002',
        	'nompcargo'=>'Cadete',
        	'user_id'=>'1'


        	]);
    }
}
