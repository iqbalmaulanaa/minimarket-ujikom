<?php

use App\TampungBayar;
use Faker\Generator as Faker;

$factory->define(TampungBayar::class, function (Faker $faker) {
    $id = \App\Penjualan::select('id')->get();
        return [
            'penjualan_id' => $faker->randomElement($id),
            'total' => $faker->numberBetWeen(1000, 9999999),
            'terima' => $faker->numberBetWeen(1000, 9999999),
            'kembali' => $faker->numberBetWeen(1000, 9999999),
        ];
});
