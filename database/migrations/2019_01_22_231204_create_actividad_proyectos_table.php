<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_proyecto', function (Blueprint $table) {
            $table->increments('actividad_proyecto_id');
            $table->string('actividad_proyecto_num', 5);
            $table->string('actividad_proyecto_name')->unique();
            $table->integer('proyecto_cod')->unsigned()->index()->nullable();
            $table->foreign('proyecto_cod')->references('proyecto_id')->on('proyecto');
            $table->integer('fase_cod')->unsigned()->index()->nullable();
            $table->foreign('fase_cod')->references('fase_id')->on('fase');
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
        Schema::dropIfExists('actividad_proyecto');
    }

}
