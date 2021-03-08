<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    public $primaryKey = 'id';
    protected $table = 'pemasok';
    protected $fillable = ['kode_pemasok','nama_pemasok','alamat','kota','no_telp'];
}
