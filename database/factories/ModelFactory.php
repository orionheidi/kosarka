<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Team::class, function(Faker $faker){       //uvek je drugi parametar callback i uvek vraca asocijativni niz gde je key naziv atributa

    return[
        "name" => $faker->company,
        "email" => $faker->unique()->safeEmail,
        "address" => $faker->streetAddress,
        "city" => $faker->city,
    ];
 });

 
$factory->define(App\Player::class, function(Faker $faker){       //uvek je drugi parametar callback i uvek vraca asocijativni niz gde je key naziv atributa

    return[
        "first_name" => $faker->firstName,
        "last_name" => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        "city" => $faker->city,
    ];
 });

 $factory->define(App\Comment::class, function(Faker $faker){       //uvek je drugi parametar callback i uvek vraca asocijativni niz gde je key naziv atributa

    return[
        "content" => $faker->paragraph,
    ];
 });

 
 $factory->define(App\News::class, function(Faker $faker){       //uvek je drugi parametar callback i uvek vraca asocijativni niz gde je key naziv atributa

    return[
        "title" => $faker->realText(150),
        "content" => $faker->paragraph,
    ];
 });

 