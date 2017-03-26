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
            $table->foreign('emergencia_id')->references('id')->on('maestro_cat_emergencias');
            $table->integer('emergencia_id')->unsigned();
            $table->date('fecha');
            $table->time('hora');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->integer('estado_id')->unsigned();
            $table->string('municipio');
            $table->string('parroquia');
            $table->foreign('bombero_id')->references('id')->on('crear_personals');
            $table->integer('bombero_id')->unsigned();
            $table->integer('nro_personas');
            $table->integer('nro_heridos');
            $table->integer('nro_decesos');
            $table->integer('condicion');
            $table->string('descripcion');
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
