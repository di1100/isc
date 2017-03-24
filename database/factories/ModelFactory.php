<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'category_id' => random_int(1,4),
        'title' => $faker->word,
        'content' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => null
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'article_id' => random_int(1,40),
        'author' => $faker->firstName." ".$faker->lastName,
        'content' => $faker->text(60),
        'likes_count' => random_int(0, 30),
        'created_at' => $faker->dateTime,
        'updated_at' => null
    ];
});
