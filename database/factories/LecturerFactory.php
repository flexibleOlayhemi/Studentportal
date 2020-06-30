<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\lecturer;
use Faker\Generator as Faker;

$factory->define(lecturer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'department' => $faker->randomElement(['CHEMISTRY','PHYSICS','NUTRITION','MATH','COMPUTER']),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
