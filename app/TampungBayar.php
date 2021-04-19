<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TampungBayar extends Model
{
    public $primaryKey = 'id';
    protected $table = 'tampung_bayar';
    protected $fillable = ['penjualan_id','total','terima','kembali'];
}
