<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Nomination::class, function (Faker $faker) {
    return [
        'office' => 'Office of ' . $faker->word,
        'election_at' => $faker->dateTimeBetween('now', '+2 years')
    ];
});
