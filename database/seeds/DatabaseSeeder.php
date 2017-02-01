<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(maestro_cargoSeeder::class);
         $this->call(maestro_cat_emergenciasSeeder::class);
         $this->call(maestro_cuerpo_bomberosSeeder::class);
         $this->call(maestro_perfiles_cargosSeeder::class);
         $this->call(maestro_tipo_equipamientosSeeder::class);
    }
}
