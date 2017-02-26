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
            'numrango'=>'1',
        	'rango'=>'General'
        	]);
          rangos::create([
            'numrango'=>'2',
        	'rango'=>'Coronel'
        	]);
            rangos::create([
                'numrango'=>'3',
        	'rango'=>'Teniente Coronel'
        	]);
        	  rangos::create([
                'numrango'=>'4',
        	'rango'=>'Mayor'
        	]);
        	    rangos::create([
                    'numrango'=>'5',
        	'rango'=>'Capitán'
        	]);
        	      rangos::create([
                    'numrango'=>'6',
        	'rango'=>'1er Teniente'
        	]);
        	        rangos::create([
                        'numrango'=>'7',
        	'rango'=>'Teniente'
        	]);
        	          rangos::create([
                        'numrango'=>'8',
        	'rango'=>'Sargento Mayor'
        	]);
        	            rangos::create([
                            'numrango'=>'9',
        	'rango'=>'Sargento Primero'
        	]);
        	              rangos::create([
                            'numrango'=>'10',
        	'rango'=>'Sargento Segundo'
        	]);
        	                rangos::create([
                                'numrango'=>'11',
        	'rango'=>'Cabo Primero'
        	]);
        	                  rangos::create([
                                'numrango'=>'12',
        	'rango'=>'Cabo Segundo'
        	]);
        	                    rangos::create([
                                    'numrango'=>'13',
        	'rango'=>'Distinguido'
        	]);
        	                      rangos::create([
                                    'numrango'=>'14',
        	'rango'=>'Bombero Raso'
        	]);
    }
}
