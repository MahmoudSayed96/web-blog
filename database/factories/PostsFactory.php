<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(30),
        'body' => $faker->text(150),
        'cover_image' => 'noimage.jpg',
        'user_id' => 1
    ];
});
