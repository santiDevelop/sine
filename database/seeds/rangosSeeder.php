<?php

use Illuminate\Database\Seeder;
use App\rangos;
class rangosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rangos::create([
        	'rango'=>'General'
        	]);
          rangos::create([
        	'rango'=>'Coronel'
        	]);
            rangos::create([
        	'rango'=>'Teniente Coronel'
        	]);
        	  rangos::create([
        	'rango'=>'Mayor'
        	]);
        	    rangos::create([
        	'rango'=>'Capitán'
        	]);
        	      rangos::create([
        	'rango'=>'1er Teniente'
        	]);
        	        rangos::create([
        	'rango'=>'Teniente'
        	]);
        	          rangos::create([
        	'rango'=>'Sargento Mayor'
        	]);
        	            rangos::create([
        	'rango'=>'Sargento Primero'
        	]);
        	              rangos::create([
        	'rango'=>'Sargento Segundo'
        	]);
        	                rangos::create([
        	'rango'=>'Cabo Primero'
        	]);
        	                  rangos::create([
        	'rango'=>'Cabo Segundo'
        	]);
        	                    rangos::create([
        	'rango'=>'Distinguido'
        	]);
        	                      rangos::create([
        	'rango'=>'Bombero Raso'
        	]);
    }
}
