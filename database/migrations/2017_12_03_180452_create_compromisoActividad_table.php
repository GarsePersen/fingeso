<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompromisoActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compromisoActividad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario');
            $table->string('descripcion')->nullable();;
            $table->string('tipo_actividad')->nullable();
            $table->integer('semestre')->nullable();
            $table->boolean('active')->nullable();
            $table->timestamps();
            $table->integer('hora_semana')->nullable();;
            $table->integer('hora_semestre')->nullable();;
            $table->string('observacion')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compromisoActividad');
    }
}
