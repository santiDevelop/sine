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
            $table->smallInteger('tcamisa')->default('0');
            $table->smallInteger('tpantalon')->default('0');
            $table->smallInteger('tcalzado')->default('0');
            $table->smallInteger('profesion');
            $table->smallInteger('nacademico');
            $table->smallInteger('ultitulo');
            $table->string('egresado');
            $table->smallInteger('curso');
            $table->smallInteger('curso2');
            $table->smallInteger('curso3');
            $table->smallInteger('curso4');
            $table->smallInteger('curso5');
            $table->smallInteger('curso6');
            $table->smallInteger('curso7');
            $table->smallInteger('curso8');
            $table->smallInteger('curso9');
            $table->smallInteger('rango');
            $table->smallInteger('cargo');
            $table->date('feingreso');  
            $table->date('proximoascenso');
            $table->integer('mcbombero_id')->unsigned();
            $table->foreign('mcbombero_id')->references('id')->on('maestro_cuerpo_bomberos');
            $table->smallInteger('status')->default('1');         
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
