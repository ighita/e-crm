<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'name' => $faker->company,
        'cui' => $faker->ein,
        'city' => $faker->city,
        'phone' => $faker->e164PhoneNumber(),
    ];
});
