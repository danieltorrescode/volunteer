<?php

use Faker\Generator as Faker;

$factory->define(App\Activity::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->jobTitle,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
