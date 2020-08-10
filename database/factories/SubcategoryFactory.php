<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subcategory;
use Faker\Generator as Faker;

$factory->define(Subcategory::class, function (Faker $faker) {
    return [
        'category_id' => factory(\App\Category::class),
        'name' => $faker->name,
        'slug' => $faker->slug,
    ];
});
