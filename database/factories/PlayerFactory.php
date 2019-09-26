<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Player;
//use App\Model;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'valor_inicial' => rand(0,9999999),
    ];
});
