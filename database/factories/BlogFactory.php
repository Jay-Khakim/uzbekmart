<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'tag_id' => factory(\App\Tag::class),
        'title_en' => $faker->word,
        'title_uz' => $faker->word,
        'title_ru' => $faker->word,
        'slug_en' => $faker->word,
        'body' => $faker->text,
        'image' => $faker->word,
    ];
});
