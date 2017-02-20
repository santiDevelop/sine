<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrearPersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crear_personals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedbombero')->unique();
            $table->string('nombombero');
            $table->string('apebombero');
            $table->date('fnacimiento');
            $table->string('lnacimiento');
            $table->smallInteger('sexo');
            $table->smallInteger('ecivil');
            $table->smallInteger('nhijos');
            $table->integer('estado')->unsigned();
            $table->foreign('estado')->references('id')->on('estados');
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
            $table->smallInteger('rango');
            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id')->on('maestro_cargos');
            $table->date('feingreso');  
            $table->date('proximoascenso');
            $table->integer('mcbombero_id')->unsigned();
            $table->foreign('mcbombero_id')->references('id')->on('maestro_cuerpo_bomberos');
            $table->integer('estacion_id')->unsigned();
            $table->foreign('estacion_id')->references('id')->on('crear_estaciones');
            $table->smallInteger('status')->default('1');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
