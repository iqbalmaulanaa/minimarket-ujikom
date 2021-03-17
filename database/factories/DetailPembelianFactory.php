<?php

use App\DetailPembelian;
use Faker\Generator as Faker;

$factory->define(DetailPembelian::class, function (Faker $faker) {
    $id = \App\Pembelian::select('id')->get();
        return [
            'pembelian_id' => $faker->randomElement($id),
            'barang_id' => $faker->randomElement(\App\Barang::select('id')->get()),
            'harga_beli' => $faker->numberBetWeen(1000, 9999999),
            'jumlah' => $faker->numberBetWeen(1, 1000),
            'total' => $faker->numberBetWeen(1000, 9999999)
        ];
});
