<?php

use App\Produk;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class,10)->create();
        // factory(Produk::class,6)->create();
        // factory(\App\Barang::class,10)->create();
        // factory(\App\Pemasok::class,10)->create();
        // factory(\App\Pelanggan::class,10)->create();
        factory(\App\Penjualan::class,10)->create();
        factory(\App\Pembelian::class,10)->create();
        factory(\App\DetailPenjualan::class,10)->create();
        factory(\App\DetailPembelian::class,10)->create();
        factory(\App\TampungBayar::class,10)->create();

    }
}
