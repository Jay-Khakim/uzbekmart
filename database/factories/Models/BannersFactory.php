<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Banners;
use Faker\Generator as Faker;

$factory->define(Banners::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url' => $faker->url,
        'image' => $faker->word,
        'status' => $faker->randomElement(["active","not"]),
        'deadline' => $faker->date(),
    ];
});
