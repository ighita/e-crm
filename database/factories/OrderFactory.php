<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'client_id' => factory(App\Client::class),
        'description' => $faker->randomDigit . ' ' . $faker->word(),
        'value' => $faker->numberBetween(100, 990),
        'status' => $faker->numberBetween(0,2)
    ];
});
