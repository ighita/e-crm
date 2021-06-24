<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cost;
use Faker\Generator as Faker;

$factory->define(Cost::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'description' => $faker->text(25),
        'value' => $faker->numberBetween(150, 950)
    ];
});
