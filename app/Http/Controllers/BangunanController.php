<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Tanah;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    public function index(Request $request)
    {
        $tanahs = Tanah::all();

        $query = Bangunan::with('tanah');

        if ($request->tanah_id) {
            $query->where('tanah_id', $request->tanah_id);
        }

        $bangunans = $query->get();

        return view('bangunan.index', compact('bangunans', 'tanahs'));
    }

   public function create()
{
    $tanahs = Tanah::all(); // Mengambil semua tanah dari database
    return view('bangunan.create', compact('tanahs'));
}


   public function store(Request $request)
{
    $request->validate([
        'nama_bangunan' => 'required',
        'kode_bangunan' => 'required',
        'tanah_id'      => 'required|exists:tanahs,id',
    ]);

    Bangunan::create($request->all());
}

        return redirect()->route('bangunan.index')
            ->with('success', 'Bangunan berhasil ditambahkan');
    }

    public function edit(Bangunan $bangunan)
    {
        $tanahs = Tanah::all();
        return view('bangunan.edit', compact('bangunan', 'tanahs'));
    }

    public function update(Request $request, Bangunan $bangunan)
    {
        $request->validate([
            'nama_bangunan' => 'required',
            'kode_bangunan' => 'required',
            'tanah_id'      => 'required|exists:tanahs,id',
        ]);

        $bangunan->update($request->all());

        return redirect()->route('bangunan.index')
            ->with('success', 'Bangunan berhasil diperbarui');
    }

    public function destroy(Bangunan $bangunan)
    {
        $bangunan->delete();

        return redirect()->route('bangunan.index')
            ->with('success', 'Bangunan berhasil dihapus');
    }
}
