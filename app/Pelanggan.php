<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    public $primaryKey = 'id';
    protected $table = 'pelanggan';
    protected $fillable = ['kode_pelanggan','nama','alamat','no_telp','email'];
}
