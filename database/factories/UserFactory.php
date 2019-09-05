<?php

use App\Property;
use App\User;
use Illuminate\Support\Str;
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

$factory->define(Property::class, function (Faker $faker) {
    return [

        'name' => $faker->streetName,
        'address' => $faker->streetAddress,
        'file' => public_path(),
        'price' => $faker->numberBetween($min = 100000, $max = 400000),
        'type' => $faker->numberBetween($min = 0, $max =2)



    ];
});
