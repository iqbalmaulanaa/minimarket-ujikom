<?php

use Faker\Factory as Faker;

$factory->define(\App\Pelanggan::class, function () {
    $faker = Faker::create('id_ID');
    return [
        'kode_pelanggan'=>'PL'.$faker->numberBetween(1,100),
        'nama'=>$faker->name,
        'alamat'=>$faker->address,
        'no_telp'=>$faker->phoneNumber,
        'email'=>$faker->email,
    ];
});
