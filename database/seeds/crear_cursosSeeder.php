<?php

use Illuminate\Database\Seeder;
use App\CrearCursos;
class crear_cursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       CrearCursos::create([
        	'numcurso'=>'001',
        	'nomcurso'=>'Curso Administrativo de Incendio',
        	'user_id'=>'1'


        	]);
    }
}
