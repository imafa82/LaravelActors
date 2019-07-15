<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    $photoArr = [
        'abstract',
        'city',
        'business',
        'transport',
        'animals'
    ];
    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentence = 5),
        'year' => $faker->numberBetween($min=1950, $max=2010),
        'photo' => $faker->imageUrl(50, 50, $faker->randomElement($photoArr)),
        'actor_id' => \App\Actor::inRandomOrder()->first()->id
    ];
});
