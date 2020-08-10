<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'company_id' => factory(\App\Company::class),
        'tag_id' => factory(\App\Tag::class),
        'name_en' => $faker->word,
        'name_uz' => $faker->word,
        'name_ru' => $faker->word,
        'slug_en' => $faker->word,
        'desc_en' => $faker->text,
        'desc_uz' => $faker->text,
        'desc_ru' => $faker->text,
        'image' => $faker->word,
    ];
});
