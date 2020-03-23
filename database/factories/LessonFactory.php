<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lesson;
use App\Tag;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->paragraph(3),
    ];
});

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
