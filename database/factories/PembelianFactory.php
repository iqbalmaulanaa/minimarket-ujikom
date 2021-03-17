<?php

use App\Pembelian;
use Faker\Generator as Faker;

$factory->define(Pembelian::class, function (Faker $faker) {
    $id = \App\Pemasok::select('id')->get();
        return [
            'kode_masuk' => $faker->unique()->numberBetWeen(1000, 100000),
            'tanggal_masuk' => $faker->date,
            'total' => $faker->numberBetWeen(1000, 1000000),
            'pemasok_id' => $faker->randomElement($id),
            'user_id' => '1'
        ];
});
