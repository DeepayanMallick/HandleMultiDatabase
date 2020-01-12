<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    return [
        'title' => $faker->title(),
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'last_login_at' => now(),
        'company' => ucfirst($faker->company()),
        'profile_visibility' => 1,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'telephone' => $faker->phoneNumber(),
        'department' => ucfirst($faker->word()),
        'user_group' => ucfirst($faker->word()),
        'gender' => $gender,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'work_anniversary' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'have_kids' => $faker->numberBetween(1, 2),
        'avatar' => $faker->imageUrl($width = 640, $height = 480),
        'role' => $faker->numberBetween(7, 9),
        'status' => $faker->numberBetween(1, 0),
        'password' => bcrypt('123456'),
        'remember_token' => Str::random(10),
    ];
});
