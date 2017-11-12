<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        DB::table('users')->delete();


        DB::table('roles')->insert(['id'=>1, 'type_Rol'=> 'Usuario']);
        DB::table('roles')->insert(['id'=>2, 'type_Rol'=> 'Gobierno']);
        DB::table('roles')->insert(['id'=>3, 'type_Rol'=> 'Organizacion']);

        static $password;
        DB::table('users')->insert(
        ['name'=> 'Gobierno',
        'run'=>'0','email'=> 'gobierno@gmail.com', 'password'=> $password ?: $password = bcrypt('gobierno'), 'role_id'=>2]);


        factory(App\User::class, 10)->create();
        factory(App\Catastrophe::class, 10)->create();
        factory(App\Action::class, 10)->create();
        factory(App\Volunteering::class, 10)->create();
        factory(App\Bank::class, 10)->create();
        factory(App\Donation::class, 10)->create();
        factory(App\Asset::class, 10)->create();
        factory(App\Collection_center::class, 10)->create();
        factory(App\Location::class, 10)->create();







  }
}
