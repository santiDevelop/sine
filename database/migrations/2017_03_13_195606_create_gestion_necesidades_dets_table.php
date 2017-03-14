<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionNecesidadesDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestion_necesidades_dets', function (Blueprint $table) {
            $table->integer('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')->references('id')->on('gestion_necesidades');
            $table->integer('elemento_id')->unsigned();
            $table->foreign('elemento_id')->references('id')->on('elementos_tipo_equipamientos');
            $table->integer('cantidad');
            $table->string('observacion');

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
        Schema::dropIfExists('gestion_necesidades_dets');
    }
}
