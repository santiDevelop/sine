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
            $table->string('nacionalidad')->default('1');
            $table->integer('cedbombero')->unique();
            $table->string('nombombero');
            $table->string('apebombero');
            $table->date('fnacimiento');
            $table->string('lnacimiento');
            $table->string('sexo');
            $table->string('ecivil');
            $table->smallInteger('nhijos');
            $table->integer('estado')->unsigned();
            $table->foreign('estado')->references('id')->on('estados');
            $table->string('telbombero');
            $table->string('correoelec');
            $table->string('dirbombero');
            $table->string('tcamisa')->default('0');
            $table->string('tpantalon')->default('0');
            $table->string('tcalzado')->default('0');
            $table->integer('profesion_id')->unsigned();
            $table->foreign('profesion_id')->references('id')->on('profesiones');
            $table->string('nacademico');
            $table->string('ultitulo');
            $table->string('egresado');
            $table->integer('rango_id')->unsigned();
            $table->foreign('rango_id')->references('id')->on('rangos');
            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id')->on('maestro_cargos');
            $table->date('feingreso');  
            $table->date('proximoascenso');
            $table->integer('mcbombero_id')->unsigned();
            $table->foreign('mcbombero_id')->references('id')->on('maestro_cuerpo_bomberos');
            $table->integer('estacion_id')->unsigned();
            $table->foreign('estacion_id')->references('id')->on('crear_estaciones');
            $table->string('status')->default('1');
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
