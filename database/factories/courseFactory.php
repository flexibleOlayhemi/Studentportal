<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Courses;
use Faker\Generator as Faker;

$factory->define(Courses::class, function (Faker $faker) {
    return [
        'title' => $faker->randomElement(['CHEMISTRY','PHYSICS','NUTRITION','MATH','COMPUTER']),
        'code' => $faker->randomElement(['CHM','PHY','NUT','MTH','CSC']),
        'unit' => $faker->randomElement(['1','2','3','4','5']),
        'level' => $faker->randomElement(['100','200','300','400','500']),
        'coordinator' => $faker->name,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
