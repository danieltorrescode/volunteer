<?php

use Faker\Generator as Faker;

$factory->define(App\Community::class, function (Faker $faker) {
    return [
			'name' => $faker->city,
			'lider_name' => $faker->name,
			'lider_phone' => $faker->numberBetween(10000,20000),
			'direction' => $faker->streetAddress,
			'description' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
