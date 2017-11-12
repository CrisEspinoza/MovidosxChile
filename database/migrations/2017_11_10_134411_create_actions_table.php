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

          $table->string('status');
          $table->integer('progress');
          $table->integer('goal');
          $table->date('start_date');
          $table->date('end_date');
          $table->integer('user_id');
          $table->integer('catastrophe_id');

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
        Schema::dropIfExists('actions');
    }
}
