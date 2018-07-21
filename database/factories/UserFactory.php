<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$04$.yVWfH73EA7D9GkuigWSFOYHEUY6LSl1fgkl3JbLtfuKSMS9/VLUG', // secret
        'remember_token' => str_random(10),
    ];
});
