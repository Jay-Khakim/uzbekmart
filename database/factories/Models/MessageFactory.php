<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'company' => $faker->company,
        'email' => $faker->safeEmail,
        'subject' => $faker->word,
        'body' => $faker->text,
    ];
});
