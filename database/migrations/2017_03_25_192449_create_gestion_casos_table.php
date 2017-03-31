<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_casos', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('mcbombero_id')->references('id')->on('maestro_cuerpo_bomberos');
            $table->integer('mcbombero_id')->unsigned();
            $table->foreign('estacion_id')->references('id')->on('crear_estaciones');
            $table->integer('estacion_id')->unsigned();
            $table->foreign('emergencia_id')->references('id')->on('maestro_cat_emergencias');
            $table->integer('emergencia_id')->unsigned();
            $table->date('fecha');
            $table->string('hora');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->integer('estado_id')->unsigned();
            $table->string('municipio');
            $table->string('parroquia');
            $table->integer('nro_personas');
            $table->integer('nro_heridos');
            $table->integer('nro_decesos');
            $table->integer('condicion');
            $table->text('descripcion');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('gestion_casos');
    }
}
