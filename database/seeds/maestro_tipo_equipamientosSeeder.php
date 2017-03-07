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
            'nomtipequip'=>'Infraestructura',
            'user_id'=>'1'
            ]);
        maestro_tipo_equipamiento::create([
            'nomtipequip'=>'Material Utilitario',
            'user_id'=>'1'
            ]);
         maestro_tipo_equipamiento::create([
            'nomtipequip'=>'Unidades Automotoras',
            'user_id'=>'1'
            ]);
          maestro_tipo_equipamiento::create([
            'nomtipequip'=>'Equipos y Herramientas',
            'user_id'=>'1'
            ]);
          maestro_tipo_equipamiento::create([
            'nomtipequip'=>'Uniformes',
            'user_id'=>'1'
            ]);
          maestro_tipo_equipamiento::create([
            'nomtipequip'=>'Material y Equipos de Oficina',
            'user_id'=>'1'
            ]);
          maestro_tipo_equipamiento::create([
            'nomtipequip'=>'Equipos de Comunicacion',
            'user_id'=>'1'
            ]);
    }
}
