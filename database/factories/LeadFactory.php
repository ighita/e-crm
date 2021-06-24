<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lead;
use Faker\Generator as Faker;

$factory->define(Lead::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'name'   => $faker->company(),
        'score'  => $faker->numberBetween(0,2),
        'notes'  => $faker->sentence(5),
        'status' => $faker->numberBetween(0,3), // prospects, contacts, leads, customers
        'industry' => $faker->bs,
        'source' =>  $faker->sentence(3)
    ];
});
