<?php

namespace App\Http\Controllers;

use App\models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotas = Anggota::all();
        return view('anggota.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik_ktp' => 'required|max:16',
            'nama_lengkap' => 'required|string|max:255',
            'no_hp' => 'required|string|max:16',
            'alamat' => 'required|string|max:200',
            'tanggal_lahir' => 'required|date',
        ]);
        anggota::create($request->all());
        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggota = Anggota::findOrfail($id);
        return view('anggota.detail', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = Anggota::findOrfail($id);
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nik_ktp' => 'required|max:16',
            'nama_lengkap' => 'required|string|max:255',
            'no_hp' => 'required|string|max:16',
            'alamat' => 'required|string|max:200',
            'tanggal_lahir' => 'required|date',
        ]);
        $anggota = Anggota::findOrFail($id);
        // $anggota->update($request->all()); secara singkat
        $anggota->update([
            'nik_ktp' => $request->nik_ktp,
            'nama_lengkap' => $request->nama_lengkap,       // secara panjang
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);
        return redirect()->route('anggotas.show',$id)->with('success','Anggota Berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();
        return redirect()->route('anggotas.index')->with('success','Anggota Berhasil dihapus!');
    }
}
