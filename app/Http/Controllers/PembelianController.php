<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pemasok;
use App\Pembelian;
use App\DetailPembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{

    public function index(){
        // $data['pemasok'] = Pemasok::all();
        // $data['barang'] = Barang::all();
        $lastId = Pembelian::select('kode_masuk')->orderBy('created_at','desc')->first();
        $data['kode'] = ($lastId == null?'P00000001':sprintf('P%08d',substr($lastId->kode_masuk,1)+1));
        return view('pembelian.index')->with($data);
    }
    public function store(Request $request){
        $data = new Pembelian();
        $data->kode_masuk = $request->kode_masuk;
        $data->tanggal_masuk = $request->tanggal;
        $data->total = $request->total;
        $data->pemasok_id = $request->pemasok_id;
        $data->user_id = 1;
        $status=$data->save();

        $lastId = DB::getPDO()->lastInsertId();
        // $lastId = Pembelian::select('id')->orderBy('created_at','desc')->first();
        for($i=0 ; $i < count($request['jumlah']) ;$i++){
            $input = new DetailPembelian();
            $input->pembelian_id = $lastId;
            $input->barang_id = $request->barang_id[$i];
            $input->harga_beli = $request->harga_beli[$i];
            $input->jumlah = $request->jumlah[$i];
            $input->total = floatval($request->harga_beli[$i]) * floatval($request->jumlah[$i]);
            $status=$input->save();
        }



        if($status) return redirect('/pembelian')->with('success','Data Berhasil Disimpan!');
        else return redirect('/pembelian')->with('error','Data gagal Disimpan!!');
        // dd($request->all());
    }
}
