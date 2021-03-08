<?php

use App\Produk;
use Faker\Generator as Faker;

$factory->define(\App\Barang::class, function (Faker $faker) {
    return [
        'kode_barang'=>'B'.$faker->numberBetween(3,50),
        'produk_id' => $faker->randomElement(\App\Produk::select('id')->get()),
        'nama_barang' => $faker->randomElement(['Barang A','Barang B','Barang C']),
        'satuan' => $faker->randomElement(['pcs','item','kardus']),
        'harga_jual' => $faker->numberBetween(1000,10000),
        'stok' => $faker->numberBetween(1,100),

    ];
});
