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
