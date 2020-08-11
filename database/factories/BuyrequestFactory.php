<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Buyrequest;
use Faker\Generator as Faker;

$factory->define(Buyrequest::class, function (Faker $faker) {
    return [
        'tag_id' => factory(\App\Tag::class),
        'category_id' => factory(\App\Category::class),
        'name_en' => $faker->word,
        'name_uz' => $faker->word,
        'name_ru' => $faker->word,
        'email' => $faker->safeEmail,
        'company_en' => $faker->word,
        'company_uz' => $faker->word,
        'company_ru' => $faker->word,
        'wants_en' => $faker->text,
        'wants_ru' => $faker->text,
        'wants_uz' => $faker->text,
        'amount_en' => $faker->randomLetter,
        'amount_ru' => $faker->randomLetter,
        'amount_uz' => $faker->randomLetter,
        'image' => $faker->word,
    ];
});
