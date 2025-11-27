<?php

namespace App\Http\Controllers;

use App\Models\Tanah;
use Illuminate\Http\Request;

class TanahController extends Controller
{
    public function index()
    {
        $tanahs = Tanah::all();
        return view('tanah.index', compact('tanahs'));
    }

    public function create()
    {
        return view('tanah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tanah' => 'required',
            'kode_tanah' => 'required|unique:tanahs,kode_tanah',
            'alamat' => 'required',
            'luas' => 'required|numeric'
        ]);

        Tanah::create($request->all());
        return redirect()->route('tanah.index')->with('success', 'Tanah berhasil ditambahkan');
    }

    public function edit(Tanah $tanah)
    {
        return view('tanah.edit', compact('tanah'));
    }

    public function update(Request $request, Tanah $tanah)
    {
        $request->validate([
            'nama_tanah' => 'required',
            'kode_tanah' => 'required|unique:tanahs,kode_tanah,' . $tanah->id,
            'alamat' => 'required',
            'luas' => 'required|numeric'
        ]);

        $tanah->update($request->all());
        return redirect()->route('tanah.index')->with('success', 'Tanah berhasil diupdate');
    }

    public function destroy(Tanah $tanah)
    {
        $tanah->delete();
        return redirect()->route('tanah.index')->with('success', 'Tanah berhasil dihapus');
    }
}
