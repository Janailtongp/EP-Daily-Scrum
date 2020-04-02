<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Daily;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Daily::class, function (Faker $faker) {
    return [
        'first_answer' => $faker->text,
        'second_answer' => $faker->text,
        'third_answer' => $faker->text,
        'user_id' => User::all()->random()->id,
    ];
});
