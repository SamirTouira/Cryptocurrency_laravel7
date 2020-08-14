<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BitcoinChart;
use Faker\Generator as Faker;

$factory->define(BitcoinChart::class, function (Faker $faker) {
    return [
        'content' =>$faker->sentence(3, true)
    ];
});
