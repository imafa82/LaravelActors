<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Actor;
use Faker\Generator as Faker;

$factory->define(Actor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastName,
        'year' => $faker->numberBetween($min=1950, $max=2010),
        'photo' => $faker->imageUrl(150, 150, 'people')

    ];
});
