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
         $this->call(maestro_cargos::class);
         $this->call(maestro_cat_emergencia::class);
         $this->call(maestro_cuerpo_bomberos::class);
         $this->call(maestro_perfiles_cargos::class);
         $this->call(maestro_tipo_equipamiento::class);
    }
}
