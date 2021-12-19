<?php

namespace App\Http\Controllers;

use App\handphone;
use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return handphone::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $hp = new handphone();
        $hp->merk = $request->merk;
        $hp->nama = $request->nama;
        $hp->spesifikasi = $request->spesifikasi;
        $hp->gambar = $request->gambar;
        $hp->save();

        return "Data berhasil disimpan";
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, handphone $handphone, $id)
    {
        $merk = $request->merk;
        $nama = $request->nama;
        $spesifikasi = $request->spesifikasi;
        $gambar = $request->gambar;
        
        $hp = handphone::find($id);
        
        $hp->merk = $merk;
        $hp->nama = $nama;
        $hp->spesifikasi = $spesifikasi;
        $hp->gambar = $gambar;
        $hp->save();

        return "Data berhasil diubah";
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\handphone  $handphone
     * @return \Illuminate\Http\Response
     */
    public function delete(handphone $handphone, $id)
    {
        $hp = handphone::find($id);
        $hp->delete();

        return "Data dihapus";
        //
    }
}
