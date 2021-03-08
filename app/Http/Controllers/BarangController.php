<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barang'] = Barang::all();
        return view('barang.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'kode_barang' => 'required',
            'produk_id' => 'required',
            'nama_barang' => 'required',
            'satuan' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required',
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $status = Barang::create($input);

        if($status) return redirect('/barang')->with('success','Data Berhasil Disimpan!');
        else return redirect('/barang')->with('error','Data gagal Disimpan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules=[
            'kode_barang' => 'required',
            'produk_id' => 'required',
            'nama_barang' => 'required',
            'satuan' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required',
        ];
        $this->validate($request, $rules);

        $data = Barang::find($request->id);
        $data->kode_barang = $request->kode_barang;
        $data->produk_id = $request->produk_id;
        $data->nama_barang = $request->nama_barang;
        $data->satuan = $request->satuan;
        $data->harga_jual = $request->harga_jual;
        $data->stok = $request->stok;
        $status= $data->save();

        if($status) return redirect('/barang')->with('success','Data Berhasil Disimpan!');
        else return redirect('/barang')->with('error','Data gagal Disimpan!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Barang::find($request->id);
        $data->delete();

        return redirect('/barang')->with('success','Data Berhasil Dihapus!');
    }
}
