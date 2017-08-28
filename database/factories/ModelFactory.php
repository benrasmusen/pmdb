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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Band::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->catchPhrase,
        'website' => 'http://' . $faker->domainName,
        'start_date' => $faker->date,
        'still_active' => $faker->boolean,
    ];
});

$factory->define(App\Album::class, function (Faker\Generator $faker) {
		$random_band = \App\Band::inRandomOrder()->first();
    return [
    	'band_id' => $random_band->id,
        'name' => $faker->catchPhrase,
        'recorded_date' => $faker->date,
        'release_date' => $faker->date,
        'number_of_tracks' => $faker->numberBetween(4,15),
        'label' => $faker->company,
        'producer' => $faker->name,
        'genre' => $faker->randomElement(['rock', 'pop', 'country', 'indie', 'rap', 'hip-hop', 'r&b', 'alt']),
    ];
});
