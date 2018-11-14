<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'role_id'=>$faker->numberBetween(2,3),
        'is_active'=>1,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->numberBetween(1,7),
        'photo_id'=>1,
        'title' => $faker->sentence(7,11),
        'body' =>$faker->paragraph(rand(10,15),true),
        'slug' =>$faker->slug(),
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
    ];
});
$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'file' => 'placeholder.jpg',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now()
    ];
});
