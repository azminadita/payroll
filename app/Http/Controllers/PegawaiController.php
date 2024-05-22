<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $peg = Pegawai::all(); //eloquent ORM
        return view('pegawai.index',compact('nomor','peg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $peg = new pegawai;
        $peg->nip = $request->nip;
        $peg->pegawai = $request->pegawai;
        $peg->save();

        return redirect('/pegawai/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peg = Nama::find($id);
        return view('pegawai.edit',compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peg = Nama::find($id);
        $peg->nip = $request->nip;
        $peg->nama = $request->nama;
        $peg->save();

        return redirect('/pegawai/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peg = Nama::find($id);
        $peg->delete();

        return redirect('/Pegawai/');
    }
}
