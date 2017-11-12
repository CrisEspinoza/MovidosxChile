<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->firstName,
        'role_id'=> 1,
        'last_name'=> $faker->lastName,
        'run' => random_int(10, 20) . '.' .random_int(100,999) . '.' .random_int(100,999) . '-'. random_int(0,9),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\Catastrophe::class, function (Faker $faker) {
    $type = array('Terremoto', 'Maremoto','Incendio','Inundacion','Erupcion');
    return [
        'location_id' => 1,
        'description'=> $faker->sentence,
        'type'=> $type[random_int(0,4)],
    ];
});



$factory->define(App\Event::class, function (Faker $faker) {
    $activities = array('bingo','zumba', 'concursos','juegos');
    $foods = array('Completos', 'Choripanes', 'Bebidas');
    return [
        'name' => $faker->name,
        'activity'=> $activities[random_int(0,3)],
        'foods'=> $foods[random_int(0,2)],
        'location_id'=>1,
    ];
});



$factory->define(App\Action::class, function (Faker $faker) {

    return [
        'status' => 'cualquier wea',
        'progress'=> random_int(0,100),
        'goal'=> random_int(100,1000),
        'actionOP_id'=> 1,
        'actionOP_type'=> 'hola',
        'start_date' => $faker->date,
        'end_date' => $faker->date,
        'user_id'=> random_int(1,10),
        'catastrophe_id'=> random_int(1,10),
    ];
});



$factory->define(App\Volunteering::class, function (Faker $faker) {
    $type = array('Construccion','Salud','Ayuda');

    return [
        'type_work' => $type[random_int(0,2)],
        'profile_voluntary'=> $faker->sentence,
        'min_voluntaries' => random_int(5,10),
        'max_voluntaries' => random_int(15,20),
    ];
});

$factory->define(App\Bank::class, function (Faker $faker) {
    $name = array('Banco estado','BCI','Banco de Chile','Falabella');

    return [
        'name'=> $name[random_int(0,3)],
    ];
});

$factory->define(App\Donation::class, function (Faker $faker) {


    return [
        'bank_id'=>random_int(1,3),
        'mount'=> random_int(100000,2000000),
        'type_donation'=>random_int(1,3),
    ];
});


$factory->define(App\Asset::class, function (Faker $faker) {
   $name = array('polera', 'pantalon','zapatos');

    return [
        'name'=>$name[random_int(0,2)],
        'type'=> 'ropa',
    ];
});

$factory->define(App\Collection_center::class, function (Faker $faker) {
   $name = array('polera', 'pantalon','zapatos');

    return [
        'name'=>$faker->name,
    ];
});
$factory->define(App\Location::class, function (Faker $faker) {
    return [
    ];
});
