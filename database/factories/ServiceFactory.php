<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'tag_id' => factory(\App\Tag::class),
        'company_id' => factory(\App\Company::class),
        'name_en' => $faker->word,
        'name_uz' => $faker->word,
        'name_ru' => $faker->word,
        'service_en' => $faker->word,
        'service_uz' => $faker->word,
        'service_ru' => $faker->word,
        'slug_en' => $faker->word,
        'desc_en' => $faker->text,
        'desc_uz' => $faker->text,
        'desc_ru' => $faker->text,
        'status' => $faker->randomElement(["active","not"]),
        'image' => $faker->word,
        'web' => $faker->word,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'address_en' => $faker->word,
        'address_uz' => $faker->word,
        'address_ru' => $faker->word,
    ];
});
