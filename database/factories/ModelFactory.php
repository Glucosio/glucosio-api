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
        'date_of_birth' => $faker->date(),
        'gender_id' => rand(0,2),
        'country_id' => rand(1,255),
    ];
});

$factory->define(App\Reading::class, function (Faker\Generator $faker) {
    return [
        'user_id' => rand(1,500),
        'value' => rand(40,600),
        'readingtype_id' => rand(1,7),
        'created_at' => $faker->date()
    ];
});

$factory->define(App\Readingtype::class, function (Faker\Generator $faker) {
    return [
        'id' => rand(1,6),
        'type' => $faker->word()
    ];
});
