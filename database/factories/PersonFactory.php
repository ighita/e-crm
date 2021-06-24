<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'client_id' => factory(App\Client::class),
        'name' =>  $faker->name,
        'phone' => $faker->e164PhoneNumber(),
        'email' => $faker->email,
        'position' => $faker->jobTitle
    ];
});
