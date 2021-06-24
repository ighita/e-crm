<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'created_by' => factory(App\User::class),
        'description' => $faker->sentence(6, true),
        'due_date' => $faker->dateTime(),
        'priority' => $faker->numberBetween(0,2)
    ];
});
