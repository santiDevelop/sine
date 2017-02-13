<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosPersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_personals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bombero')->unsigned();
            $table->foreign('id_bombero')->references('id')->on('crear_personals');
            $table->integer('curso_id')->unsigned();
            $table->foreign('curso_id')->references('id')->on('crear_cursos');
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
        Schema::dropIfExists('cursos_personals');
    }
}
