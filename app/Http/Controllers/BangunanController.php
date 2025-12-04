<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Tanah;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    // Tampil semua bangunan
    public function index()
    {
        $bangunans = Bangunan::with('tanah')->get();
        return view('bangunan.index', compact('bangunans'));
    }

    // Form tambah bangunan
    public function create()
    {
        $tanahs = Tanah::all();
        return view('bangunan.create', compact('tanahs'));
    }

    // Simpan bangunan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_bangunan' => 'required',
            'kode_bangunan' => 'required|unique:bangunans,kode_bangunan',
            'tanah_id' => 'required|exists:tanahs,id',
        ]);

        Bangunan::create($request->all());
        return redirect()->route('bangunan.index')->with('success', 'Bangunan berhasil ditambahkan!');
    }

    // Form edit bangunan
    public function edit(Bangunan $bangunan)
    {
        $tanahs = Tanah::all();
        return view('bangunan.edit', compact('bangunan', 'tanahs'));
    }

    // Update bangunan
    public function update(Request $request, Bangunan $bangunan)
    {
        $request->validate([
            'nama_bangunan' => 'required',
            'kode_bangunan' => 'required|unique:bangunans,kode_bangunan,' . $bangunan->id,
            'tanah_id' => 'required|exists:tanahs,id',
        ]);

        $bangunan->update($request->all());
        return redirect()->route('bangunan.index')->with('success', 'Bangunan berhasil diupdate!');
    }

    // Hapus bangunan
    public function destroy(Bangunan $bangunan)
    {
        $bangunan->delete();
        return redirect()->route('bangunan.index')->with('success', 'Bangunan berhasil dihapus!');
    }
    // Tampil detail satu bangunan
    public function show(Bangunan $bangunan)
    {
        return view('bangunan.show', compact('bangunan'));
    }

}
