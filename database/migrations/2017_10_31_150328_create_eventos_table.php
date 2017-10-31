<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
          $table->increments('id');

          $table->string('Nombre_Evento');
          $table->string('Actividades');
          $table->string('Alimentos');

          //fk
          $table->integer('id_ubicacion')->unsigned()->nullable();
          $table->foreign('id_ubicacion')->references('id')->on('ubicacions');

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
        Schema::dropIfExists('eventos');
    }
}
