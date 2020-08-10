<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Investment;
use Faker\Generator as Faker;

$factory->define(Investment::class, function (Faker $faker) {
    return [
        'tag_id' => factory(\App\Tag::class),
        'category_id' => factory(\App\Category::class),
        'title_en' => $faker->word,
        'title_uz' => $faker->word,
        'title_ru' => $faker->word,
        'slug_en' => $faker->word,
        'address_en' => $faker->word,
        'address_uz' => $faker->word,
        'address_ru' => $faker->word,
        'amount' => $faker->randomLetter,
        'avaragepower_en' => $faker->randomLetter,
        'avaragepower_uz' => $faker->randomLetter,
        'avaragepower_ru' => $faker->randomLetter,
        'iir' => $faker->randomLetter,
        'npv' => $faker->randomLetter,
        'payback' => $faker->randomLetter,
        'workplaces' => $faker->randomLetter,
    ];
});
