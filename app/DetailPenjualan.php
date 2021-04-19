<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    public $primaryKey = 'id';
    protected $table = 'detail_penjualan';
    protected $fillable = ['penjualan_id','barang_id','harga_jual','jumlah','sub_total'];
}
