<?php

use Illuminate\Database\Seeder;
use App\profesiones;
class profesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        profesiones::create([
        	'profesion'=>'Sin Profesion'
        	]);
    }
}
