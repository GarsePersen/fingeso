<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_compromiso')->nullable();
            $table->string('descripcion')->nullable();;
            $table->string('tipo_actividad')->nullable();
            $table->integer('semestre')->nullable();
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
        Schema::dropIfExists('actividad');
    }
}
