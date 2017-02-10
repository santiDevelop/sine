<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrearPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crear_personal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedbombero')->unique();
            $table->string('nombombero');
            $table->string('apebombero');
            $table->date('fnacimiento');
            $table->string('lnacimiento');
            $table->smallInteger('sexo');
            $table->smallInteger('ecivil');
            $table->smallInteger('nhijos');
            $table->string('telbombero');
            $table->string('correoelec');
            $table->string('dirbombero');
            $table->smallInteger('tcamisa');
            $table->smallInteger('tpantalon');
            $table->smallInteger('tcalzado');
            $table->smallInteger('profesion');
            $table->smallInteger('nacademico');
            $table->smallInteger('ultitulo');
            $table->smallInteger('egresado');
            $table->smallInteger('cursos');
            $table->smallInteger('rango');
            $table->smallInteger('cargo');
            $table->date('feingreso');  
            $table->date('proximoascenso');
            $table->integer('mcbombero_id')->unsigned();
            $table->foreign('mcbombero_id')->references('id')->on('maestro_cuerpo_bomberos');
            $table->smallInteger('status');         
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crear_personals');
    }
}
