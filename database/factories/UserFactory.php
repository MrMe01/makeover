<?php

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


$factory->define(App\User::class, function (Faker $faker) {
    $address1 = "Casa blanca de dos pisos con patio grande";
$address2 = "Casa con rejas negras en forma de flores";
$address3 = "Casa #5, segundo piso";
    return [
        'name'              => $faker->name,
        'email'             => 'joandres098@gmail.com',
        // 'email' => 'joandres098@gmail.com',
        'password'          => 'secret', // secret
        'remember_token'    => str_random(10),
        'address'           => $faker->address,
        'cp'                => $faker->randomElement(['77536','77532','77598','88753','96321','78954']),
        'cel'               => $faker->randomElement(['9988417622','9981311053','9987569234']),
        'addressdetails'    => $faker->randomElement([$address1,$address2,$address3]),
        'type'              => $faker->randomElement(['user','admin','employee']),
    ];
});

// $factory->define(App\Models\Category::class, function (Faker $faker){
//     return[
//         'name' => 
//     ];
// });