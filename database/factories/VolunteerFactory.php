<?php

use Faker\Generator as Faker;

$factory->define(App\Volunteer::class, function (Faker $faker) {
    return [
			'firstName' => $faker->firstName,
			'lastName' => $faker->lastName,
			'email' => $faker->email,
			// 'password' => $faker->password,
			'description' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
