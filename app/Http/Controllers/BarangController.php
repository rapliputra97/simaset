<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        $barangs = Barang::with(['kategori','ruangan'])->get();
        return view('barang.index', compact('barangs'));
    }

    public function create() {
        $kategoris = Kategori::all();
        $ruangans = Ruangan::with('bangunan')->get();
        return view('barang.create', compact('kategoris','ruangans'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required|unique:barangs,kode_barang',
            'kategori_id' => 'required|exists:kategoris,id',
            'ruangan_id' => 'required|exists:ruangans,id',
            'jumlah' => 'required|integer|min:1'
        ]);
        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    public function edit(Barang $barang) {
        $kategoris = Kategori::all();
        $ruangans = Ruangan::with('bangunan')->get();
        return view('barang.edit', compact('barang','kategoris','ruangans'));
    }

    public function update(Request $request, Barang $barang) {
        $request->validate([
            'nama_barang' => 'required',
            'kode_barang' => 'required|unique:barangs,kode_barang,' . $barang->id,
            'kategori_id' => 'required|exists:kategoris,id',
            'ruangan_id' => 'required|exists:ruangans,id',
            'jumlah' => 'required|integer|min:1'
        ]);
        $barang->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate!');
    }

    public function destroy(Barang $barang) {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus!');
    }
}
