<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'place' => $faker->realText($maxNbChars = 10, $indexSize = 1),
        'caption' => $faker->realText($maxNbChars = 10, $indexSize = 1),
        'cost' => $faker->numberBetween($min = 1, $max = 4000),
        'sport' => "basketball",
        'user_id' => $faker->numberBetween($min = 1, $max = 7),
        
    ];
});
