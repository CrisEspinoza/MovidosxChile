<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->delete();

        // Añadimos una entrada a esta tabla
        Usuario::create(array('Rut' => '193916813'));
    }
}
