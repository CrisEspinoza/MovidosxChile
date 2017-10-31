<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatastrovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catastroves', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('Tipo_Catastrofe');


          //fk
          $table->integer('Id_Ubicacion')->unsigned()->nullable();
          $table->foreign('Id_Ubicacion')->references('id')->on('ubicacion');

          $table->integer('id_usuario')->unsigned()->nullable();
          $table->foreign('id_usuario')->references('id')->on('usuarios');

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
      Schema::disableForeignKeyConstraints();
      Schema::dropIfExists('catastroves');
      Schema::enableForeignKeyConstraints();
    }
}
