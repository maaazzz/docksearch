<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Dock;
use Faker\Generator as Faker;

$factory->define(Dock::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'phone' => $faker->phoneNumber,
        'alternate_phone' => $faker->phoneNumber,
        'marine_name' => $faker->name,
        'zip_code' => $faker->postcode,
        'dock_country' => $faker->country,
        'dock_state' => $faker->state,
        'dock_city' => $faker->city,
        'list_type' => 'rent',
        'price' => 100,
        'price_for_rent' => 10,
        'dock_address_one' => 'peshawar',
        'dock_address_two' => 'peshawar',
        'dock_description' => 'docksearch list a dock',
        'location_type' => 'Home',
        'dock_type' => 'slip',
        'max_length' => 1,
        'max_width' => 2,
        'max_draw' => 1,
        'max_height' => 1,
        'dock_attributes' => 'test',
        'dock_status' => 0,
    ];
});
