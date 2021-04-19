<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pelanggan;
use App\Penjualan;
use App\DetailPenjualan;
use App\TampungBayar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function index(){
        $data['pemasok'] = Pelanggan::all();
        $data['barang'] = Barang::all();
        $lastId = Penjualan::select('no_faktur')->orderBy('created_at','desc')->first();
        $data['kode'] = ($lastId == null?'P00000001':sprintf('P%08d',substr($lastId->no_faktur,1)+1));
        return view('penjualan.index')->with($data);
    }
    public function store(Request $request){
        $data = new Penjualan();
        $data->no_faktur = $request->no_faktur;
        $data->tanggal_faktur = $request->tanggal;
        $data->total_bayar = $request->total;
        $data->pelanggan_id = $request->pelanggan_id;
        $data->user_id = 1;
        $status=$data->save();


        $last = Penjualan::select('id')->orderBy('created_at','desc')->first();
        $lastId = $last->id;
        for($i=0 ; $i < count($request['jumlah']) ;$i++){
            $input = new DetailPenjualan();
            $input->penjualan_id = $lastId;
            $input->barang_id = $request->barang_id[$i];
            $input->harga_jual = $request->harga_jual[$i];
            $input->jumlah = $request->jumlah[$i];
            $input->sub_total = floatval($request->harga_jual[$i]) * floatval($request->jumlah[$i]);
            $status=$input->save();
        }

        $tampung = new TampungBayar();
        $tampung->penjualan_id = $lastId;
        $tampung->terima = $request->bayar;
        $tampung->total = $request->total;
        $tampung->kembali = $request->bayar - $request->total;
        $status=$tampung->save();

        if($status) return redirect('/penjualan')->with('success','Data Berhasil Disimpan!');
        else return redirect('/penjualan')->with('error','Data gagal Disimpan!!');
        // dd($request->all());
    }
}
