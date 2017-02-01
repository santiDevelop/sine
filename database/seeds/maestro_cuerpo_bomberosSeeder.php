<?php

use Illuminate\Database\Seeder;
use App\maestro_cuerpo_bomberos;
class maestro_cuerpo_bomberosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         maestro_cuerpo_bomberos::create([
        	'numcbomb'=>'001',
        	'nomcbombero'=>'Cuerpo Edo. Miranda',
        	'user_id'=>'1'


        	]);
        maestro_cuerpo_bomberos::create([
        	'numcbomb'=>'002',
        	'nomcbombero'=>'Cuerpo Edo. Vargas',
        	'user_id'=>'1'


        	]);
    }
}
