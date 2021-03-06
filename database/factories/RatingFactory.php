<?php

use Faker\Generator as Faker;
use App\Rating;
use App\Instructor;

$factory->define(Rating::class, function (Faker $faker) {

    return [
        'user_id' => Instructor::inRandomOrder()->first()->user_id,
        'rating' => $faker->numberBetween(1, 5),
        'title' => $faker->word,
        'comment' => $faker->paragraph(),
        'rateable_id' => NULL,
        'rateable_type' => NULL
    ];
});
