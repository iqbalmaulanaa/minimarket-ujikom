<?php

use App\DetailPenjualan;
use Faker\Generator as Faker;

$factory->define(DetailPenjualan::class, function (Faker $faker) {
    $penjualanId = \App\Penjualan::select('id')->get();
        $barangId = \App\Barang::select('id')->get();
        return [
            'penjualan_id' => $faker->randomElement($penjualanId),
            'barang_id' => $faker->randomElement($barangId),
            'harga_jual' => $faker->numberBetWeen(1000, 99999999),
            'jumlah' => $faker->numberBetWeen(1, 9999),
            'sub_total' => $faker->numberBetWeen(1000, 99999999)
        ];
});
