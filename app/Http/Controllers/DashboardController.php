<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Tanah;
use App\Models\Ruangan;
use App\Models\Kategori;
use App\Models\Barang;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalBangunan' => Bangunan::count(),
            'totalTanah' => Tanah::count(),
            'totalRuangan' => Ruangan::count(),
            'totalKategori' => Kategori::count(),
            'totalBarang' => Barang::count()
        ]);
    }
}
