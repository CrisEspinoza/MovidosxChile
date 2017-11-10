<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
          $table->increments('id');

          $table->morphs('actionOP');

          $table->string('Estado');
          $table->integer('Avance');
          $table->integer('Meta');
          $table->date('Fecha_Inicio');
          $table->date('Fecha_Termino');

          //fk
          $table->integer('id_user')->unsigned()->nullable();
          $table->foreign('id_user')->references('id')->on('users');

          $table->integer('id_catastrophe')->unsigned()->nullable();
          $table->foreign('id_catastrophe')->references('id')->on('catastrophes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actions');
    }
}
