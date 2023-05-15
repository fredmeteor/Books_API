<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        "customer_id" => factory('App\Customer')->create(),
        "room_id" => factory('App\Room')->create(),
        "time_from" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "time_to" => $faker->date("d-m-Y H:i:s", $max = 'now'),
        "additional_information" => $faker->name,
    ];
});
