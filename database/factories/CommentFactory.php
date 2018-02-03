<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'body' => $faker->paragraph,
        'post_id' => function () {
        	return factory('App\Post')->create()->id;
        },
    ];
});
