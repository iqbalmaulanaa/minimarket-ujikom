<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    public $primaryKey = 'id';
    protected $table = 'penjualan';
    protected $fillable = ['no_faktur','tanggal_faktur','total_bayar','pelanggan_id','user_id'];
}
