<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'level' => $faker->randomElement(['100','200','300','400','500']),
        'gender' => $faker->randomElement(['male','female']),
        'department' => $faker->randomElement(['computer','english','nutrition']),
        'faculty' => $faker->randomElement(['art','tech','agric']),
        'created_at' => now(),
        'updated_at' => now()



    ];
});
