<?php

use Illuminate\Database\Seeder;
use App\estados;
class estadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         estados::create([
        	'estado'=>'Amazonas',
        	]);
        estados::create([
        	'estado'=>'Anzoátegui',
        	]);
         estados::create([
        	'estado'=>'Apure',
        	]);
          estados::create([
        	'estado'=>'Aragua',
        	]);
           estados::create([
        	'estado'=>'Barinas',
        	]);
            estados::create([
        	'estado'=>'Bolívar',
        	]);
        	 estados::create([
        	'estado'=>'Carabobo',
        	]);
        	  estados::create([
        	'estado'=>'Cojedes',
        	]);
        	estados::create([
        	'estado'=>'Delta Amacuro',
        	]);
        	 estados::create([
        	'estado'=>'Distrito Capital',
        	]);
        	 estados::create([
        	'estado'=>'Falcón',
        	]);
        	     estados::create([
        	'estado'=>'Guárico',
        	]);
        	 estados::create([
        	'estado'=>'Lara',
        	]);
        	 estados::create([
        	'estado'=>'Mérida',
        	]);
        	  estados::create([
        	'estado'=>'Miranda',
        	]);
        	  estados::create([
        	'estado'=>'Monagas',
        	]);
        	  estados::create([
        	'estado'=>'Nueva Esparta',
        	]);
        	  estados::create([
        	'estado'=>'Portuguesa',
        	]);
        	  estados::create([
        	'estado'=>'Sucre',
        	]);
        	  estados::create([
        	'estado'=>'Táchira',
        	]);
        	  estados::create([
        	'estado'=>'Trujillo',
        	]);
        	  estados::create([
        	'estado'=>'Vargas',
        	]);
        	  estados::create([
        	'estado'=>'Yaracuy',
        	]);
        	  estados::create([
        	'estado'=>'Zulia',
        	]);
        	  
    }
}
