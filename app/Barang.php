<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $primaryKey = 'id';
    protected $table = 'barang';
    protected $fillable = ['kode_barang','produk_id','nama_barang','satuan','harga_jual','stok'];

    public function produk(){
        return $this->hasOne('\App\Produk', 'id','produk_id');
    }
}
