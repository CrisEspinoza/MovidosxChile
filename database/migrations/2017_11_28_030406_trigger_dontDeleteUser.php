<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerDontDeleteUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE OR REPLACE FUNCTION dontDeleteUser() 
            RETURNS TRIGGER AS $dontDelete$
            DECLARE
            BEGIN
            UPDATE users
            SET banned=1 
            WHERE id=old.id;
            RETURN NULL;
            END;
            $dontDelete$ LANGUAGE plpgsql;'
        );
        DB::statement('DROP TRIGGER IF EXISTS dontDelete on users cascade');
        DB::statement('CREATE TRIGGER dontDelete BEFORE DELETE
                       ON users FOR EACH ROW 
                       EXECUTE procedure dontDeleteUser()');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TRIGGER IF EXISTS dontDelete on users cascade');
        DB::statement('DROP FUNCTION IF EXISTS dontDeleteUser() cascade');
    }
}
