<?php

namespace App\Http\Controllers;

use App\Models\Tanah;
use Illuminate\Http\Request;

class TanahController extends Controller
{
    // Tampil semua tanah
    public function index()
    {
        $tanahs = Tanah::all();
        return view('tanah.index', compact('tanahs'));
    }

    // Form tambah tanah
    public function create()
    {
        return view('tanah.create');
    }

    // Simpan tanah baru
    public function store(Request $request)
    {
        $request->validate([
        'nama_tanah' => 'required',
        'kode_tanah' => 'required|unique:tanahs,kode_tanah,' . ($tanah->id ?? ''),
        'status' => 'required',
    ]);


        Tanah::create($request->all());
        return redirect()->route('tanah.index')->with('success', 'Tanah berhasil ditambahkan!');
    }

    // Form edit tanah
    public function edit(Tanah $tanah)
    {
        return view('tanah.edit', compact('tanah'));
    }

    // Update tanah
    public function update(Request $request, Tanah $tanah)
    {
        $request->validate([
            'nama_tanah' => 'required',
            'kode_tanah' => 'required|unique:tanahs,kode_tanah,' . $tanah->id,
        ]);

        $tanah->update($request->all());
        return redirect()->route('tanah.index')->with('success', 'Tanah berhasil diupdate!');
    }

    // Hapus tanah
    public function destroy(Tanah $tanah)
    {
        $tanah->delete();
        return redirect()->route('tanah.index')->with('success', 'Tanah berhasil dihapus!');
    }

    // Detail tanah (opsional)
    public function show(Tanah $tanah)
    {
        return view('tanah.show', compact('tanah'));
    }
}
