<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolPermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_permiso', function (Blueprint $table) {

          $table->integer('id_rol')->unsigned()->nullable();
          $table->foreign('id_rol')->references('id')
                ->on('rols')->onDelete('cascade');

          $table->integer('id_permiso')->unsigned()->nullable();
          $table->foreign('id_permiso')->references('id')
                ->on('permisos')->onDelete('cascade');

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
        Schema::dropIfExists('rol_permiso');
        Schema::enableForeignKeyConstraints();
    }
}
