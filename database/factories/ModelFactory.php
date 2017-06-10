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
        'phoneNumber' => $faker->phoneNumber,
        'api_token' => str_random(20),
        'register_time' => $faker->dateTime,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\PVStation::class, function (Faker\Generator $faker) {

    return [
        'Lat' => $faker->latitude,
        'Lng' => $faker->longitude,
        'env_Temp' => $faker->randomFloat(2,8,30),
        'env_Irr' => $faker->randomFloat(2,100,1000),
        'generating_capacity' => $faker->randomFloat(2,8,30),
        'wind_force' => $faker->randomFloat(2,0,8),
        'wind_direction' => $faker->randomDigit(1,20),
    ];
});
$factory->define(App\Sensor::class, function (Faker\Generator $faker) {

    return [
        'sensor_name' => $faker->text(5),
        'value' => $faker->randomFloat(2,8,30),
        'update_at' => $faker->dateTime,
        ];
});
$factory->define(App\PVArray::class, function (Faker\Generator $faker) {

    return [
        'Temp' => $faker->randomFloat(2,8,30),
        'Irr' => $faker->randomFloat(2,100,1000),
        'Vmp' => $faker->randomFloat(2,1,100),
        'Imp' => $faker->randomFloat(2,0,15),
        'Voltage' => $faker->randomFloat(2,1,100),
        'Current' => $faker->randomFloat(2,0,15),
        'Power' => $faker->randomFloat(2,0,15),
        'status_describe' =>'Noraml',
    ];
});
$factory->define(App\PVModule::class, function (Faker\Generator $faker) {

    return [
        'Temp' => $faker->randomFloat(2,8,30),
        'Irr' => $faker->randomFloat(2,100,1000),
        'Voltage' => $faker->randomFloat(2,1,100),
        'Current' => $faker->randomFloat(2,0,15),
        'Power' => $faker->randomFloat(2,0,15),
    ];
});
$factory->define(App\Devices::class, function (Faker\Generator $faker) {

    return [
        'device_ip' => $faker->ipv4,
        'cpu_temp' => $faker->randomFloat(2,10,80),
        'disk_space_usage' => $faker->randomFloat(2,1,100),
        'memory_usage' => $faker->randomFloat(2,0,100),
        'cpu_usage' => $faker->randomFloat(2,2,15),
    ];
});
