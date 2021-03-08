<?php

use Faker\Generator as Faker;

$factory->define(\App\Produk::class, function (Faker $faker) {
    $produk = ['Mie','Snack','Susu','Cokelat','Permen','Minuman'];
    return [
        'produk' => $faker->randomElement($produk)
    ];
});
