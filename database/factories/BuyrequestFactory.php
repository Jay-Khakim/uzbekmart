<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Buyrequest;
use Faker\Generator as Faker;

$factory->define(Buyrequest::class, function (Faker $faker) {
    return [
        'tag_id' => factory(\App\Tag::class),
        'category_id' => factory(\App\Category::class),
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'company' => $faker->company,
        'wants' => $faker->text,
        'amount' => $faker->randomLetter,
        'image' => $faker->word,
    ];
});
