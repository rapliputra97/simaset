<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Tanah;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    /**
     * Tampilkan semua data bangunan.
     */
    public function index()
    {
        $bangunan = Bangunan::with('tanah')->get();
        return view('bangunan.index', compact('bangunan'));
    }

    /**
     * Form tambah bangunan.
     */
    public function create()
    {
        $tanah = Tanah::all(); // ambil semua tanah
        return view('bangunan.create', compact('tanah'));
    }

    /**
     * Simpan data bangunan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bangunan' => 'required',
            'kode_bangunan' => 'required',
            'tanah_id'      => 'required',
        ]);

        Bangunan::create([
            'nama_bangunan' => $request->nama_bangunan,
            'kode_bangunan' => $request->kode_bangunan,
            'tanah_id'      => $request->tanah_id,
        ]);

        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Ditambah!');
    }

    /**
     * Form edit bangunan.
     */
    public function edit(string $id)
    {
        $bangunan = Bangunan::findOrFail($id);
        $tanah = Tanah::all();
        return view('bangunan.edit', compact('bangunan', 'tanah'));
    }

    /**
     * Update data bangunan.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_bangunan' => 'required',
            'kode_bangunan' => 'required',
            'tanah_id'      => 'required',
        ]);

        $bangunan = Bangunan::findOrFail($id);

        $bangunan->update([
            'nama_bangunan' => $request->nama_bangunan,
            'kode_bangunan' => $request->kode_bangunan,
            'tanah_id'      => $request->tanah_id,
        ]);

        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Hapus data bangunan.
     */
    public function destroy(string $id)
    {
        Bangunan::destroy($id);
        return redirect()->route('bangunan.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
