<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentroAcopioBienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_acopio_bien', function (Blueprint $table) {
            
            $table->integer('id_bien')->unsigned()->nullable();
            $table->foreign('id_bien')->references('id')
                  ->on('biens')->onDelete('cascade');

            $table->integer('id_centroAcopio')->unsigned()->nullable();
            $table->foreign('id_centroAcopio')->references('id')
                  ->on('centro_de_acopios')->onDelete('cascade');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centro_acopio_bien');
    }
}
