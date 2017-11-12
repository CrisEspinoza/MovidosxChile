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

    return [
        'location_id' => 1,
        'description'=> $faker->sentence,
        'type'=> 'terremoto',
    ];
});

$factory->define(App\Event::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'activity'=> $faker->word,
        'foods'=> $faker->colorName,
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
