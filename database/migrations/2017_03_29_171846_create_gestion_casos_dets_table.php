<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionCasosDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_casos_dets', function (Blueprint $table) {
            $table->foreign('caso_id')->references('id')->on('gestion_casos');
            $table->integer('caso_id')->unsigned();
            $table->foreign('bombero_id')->references('id')->on('crear_personals');
            $table->integer('bombero_id')->unsigned();
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
        Schema::dropIfExists('gestion_casos_dets');
    }
}
