<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'old' => $faker->numberBetween(18, 30),
    ];
});
