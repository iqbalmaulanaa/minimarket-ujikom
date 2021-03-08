<?php

use Faker\Factory as Faker;

$factory->define(\App\Pemasok::class, function () {
    $faker = Faker::create('id_ID');
    return [
        'kode_pemasok'=>'P'.$faker->numberBetween(1,100),
        'nama_pemasok'=>$faker->company,
        'alamat'=>$faker->address,
        'kota'=>$faker->city,
        'no_telp'=>$faker->phoneNumber,
    ];
});
