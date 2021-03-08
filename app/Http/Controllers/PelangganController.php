<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pelanggan'] = Pelanggan::all();
        return view('pelanggan.index')->with($data);
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
            'kode_pelanggan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
        ];
        $this->validate($request,$rules);

        $input = $request->all();
        $status = Pelanggan::create($input);

        if($status) return redirect('/pelanggan')->with('success','sukses');
        else return redirect('/pelanggan')->with('failed','gagal');
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
            'kode_pelanggan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
        ];
        $this->validate($request,$rules);

        $data = Pelanggan::find($request->id);
        $data->kode_pelanggan = $request->kode_pelanggan;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;
        $data->email = $request->email;
        $status = $data->save();

        if($status) return redirect('/pelanggan')->with('success','sukses');
        else return redirect('/pelanggan')->with('failed','gagal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Pelanggan::find($request->id);
        $status = $data->delete();

        if($status) return redirect('/pelanggan')->with('success','sukses');
        else return redirect('/pelanggan')->with('failed','gagal');
    }
}
