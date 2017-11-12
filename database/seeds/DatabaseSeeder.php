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
        DB::table('roles')->delete();


        DB::table('roles')->insert(['id'=>1, 'type_Rol'=> 'Usuario']);
        DB::table('roles')->insert(['id'=>2, 'type_Rol'=> 'Gobierno']);
        DB::table('roles')->insert(['id'=>3, 'type_Rol'=> 'Organizacion']);


        factory(App\User::class, 10)->create();

  }
}
