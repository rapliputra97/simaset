<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Bangunan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index() {
        $ruangans = Ruangan::with('bangunan')->get();
        return view('ruangan.index', compact('ruangans'));
    }

    public function create() {
        $bangunans = Bangunan::all();
        return view('ruangan.create', compact('bangunans'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_ruangan' => 'required',
            'bangunan_id' => 'required|exists:bangunans,id'
        ]);
        Ruangan::create($request->all());
        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil ditambahkan!');
    }

    public function edit(Ruangan $ruangan) {
        $bangunans = Bangunan::all();
        return view('ruangan.edit', compact('ruangan','bangunans'));
    }

    public function update(Request $request, Ruangan $ruangan) {
        $request->validate([
            'nama_ruangan' => 'required',
            'bangunan_id' => 'required|exists:bangunans,id'
        ]);
        $ruangan->update($request->all());
        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil diupdate!');
    }

    public function destroy(Ruangan $ruangan) {
        $ruangan->delete();
        return redirect()->route('ruangan.index')->with('success', 'Ruangan berhasil dihapus!');
    }
}
