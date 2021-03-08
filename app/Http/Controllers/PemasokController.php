<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pemasok;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pemasok'] = Pemasok::all();
        return view('pemasok.index')->with($data);
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
        $rules = [
            'kode_pemasok' => 'required',
            'nama_pemasok' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required',
        ];
        $this->validate($request,$rules);

        $input = $request->all();
        $status = Pemasok::create($input);

        if($status) return redirect('/pemasok')->with('success','sukses');
        else return redirect('/pemasok')->with('failed','gagal');
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
        $rules = [
            'kode_pemasok' => 'required',
            'nama_pemasok' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required',
        ];
        $this->validate($request,$rules);

        $data = Pemasok::find($request->id);
        $data->kode_pemasok = $request->kode_pemasok;
        $data->nama_pemasok = $request->nama_pemasok;
        $data->alamat = $request->alamat;
        $data->kota = $request->kota;
        $data->no_telp = $request->no_telp;
        $status=$data->save();

        if($status) return redirect('/pemasok')->with('success','sukses');
        else return redirect('/pemasok')->with('failed','gagal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Pemasok::find($request->id);
        $status=$data->delete();

        if($status) return redirect('/pemasok')->with('success','sukses');
        else return redirect('/pemasok')->with('failed','gagal');
    }
}
