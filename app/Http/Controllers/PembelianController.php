<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pemasok;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index(){
        // $data['pemasok'] = Pemasok::all();
        // $data2['barang'] = Barang::all();
        return view('pembelian.index');
    }
}
