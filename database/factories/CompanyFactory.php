<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'subcategory_id' => factory(\App\Subcategory::class),
        'category_id' => factory(\App\Category::class),
        'tag_id' => factory(\App\Tag::class),
        'companytype' => $faker->randomElement(["local","foreign"]),
        'name_en' => $faker->word,
        'name_uz' => $faker->word,
        'name_ru' => $faker->word,
        'slug_en' => $faker->word,
        'desc_en' => $faker->text,
        'desc_uz' => $faker->text,
        'desc_ru' => $faker->text,
        'status' => $faker->randomElement(["active",""]),
        'image' => $faker->word,
        'web' => $faker->word,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'address_en' => $faker->word,
        'address_uz' => $faker->word,
        'address_ru' => $faker->word,
    ];
});
