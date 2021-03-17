<?php

use App\Penjualan;
use Faker\Generator as Faker;

$factory->define(Penjualan::class, function (Faker $faker) {
    $id = \App\Pelanggan::select('id')->get();
        return [
            'no_faktur' => $faker->unique()->numberBetWeen(100000, 999999),
            'tanggal_faktur' => $faker->date,
            'total_bayar' => $faker->numberBetWeen(1000, 9999999),
            'pelanggan_id' => $faker->randomElement($id),
            'user_id' => '1'
        ];
});
