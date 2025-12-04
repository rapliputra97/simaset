@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Dashboard SIMASET</h2>
    <div class="row g-4">

        <!-- Bangunan -->
        <div class="col-md-4 col-lg-2">
            <div class="card text-white bg-info shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-building display-4"></i>
                    <h5 class="card-title mt-2">Bangunan</h5>
                    <p class="display-6">{{ $totalBangunan }}</p>
                    <a href="{{ route('bangunan.index') }}" class="btn btn-light btn-sm">Lihat <i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>

        <!-- Tanah -->
        <div class="col-md-4 col-lg-2">
            <div class="card text-white bg-success shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-map display-4"></i>
                    <h5 class="card-title mt-2">Tanah</h5>
                    <p class="display-6">{{ $totalTanah }}</p>
                    <a href="{{ route('tanah.index') }}" class="btn btn-light btn-sm">Lihat <i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>

        <!-- Ruangan -->
        <div class="col-md-4 col-lg-2">
            <div class="card text-white bg-warning shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-house-door display-4"></i>
                    <h5 class="card-title mt-2">Ruangan</h5>
                    <p class="display-6">{{ $totalRuangan }}</p>
                    <a href="{{ route('ruangan.index') }}" class="btn btn-light btn-sm">Lihat <i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>

        <!-- Kategori -->
        <div class="col-md-4 col-lg-2">
            <div class="card text-white bg-primary shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-tags display-4"></i>
                    <h5 class="card-title mt-2">Kategori</h5>
                    <p class="display-6">{{ $totalKategori }}</p>
                    <a href="{{ route('kategori.index') }}" class="btn btn-light btn-sm">Lihat <i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>

        <!-- Barang -->
        <div class="col-md-4 col-lg-2">
            <div class="card text-white bg-danger shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-box display-4"></i>
                    <h5 class="card-title mt-2">Barang</h5>
                    <p class="display-6">{{ $totalBarang }}</p>
                    <a href="{{ route('barang.index') }}" class="btn btn-light btn-sm">Lihat <i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>

        <!-- Tambah Cepat -->
        <div class="col-md-4 col-lg-2">
            <div class="card text-white bg-secondary shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-plus-circle display-4"></i>
                    <h5 class="card-title mt-2">Tambah Cepat</h5>
                    <a href="{{ route('bangunan.create') }}" class="btn btn-light btn-sm mb-1"><i class="bi bi-building"></i> Bangunan</a>
                    <a href="{{ route('tanah.create') }}" class="btn btn-light btn-sm mb-1"><i class="bi bi-map"></i> Tanah</a>
                    <a href="{{ route('ruangan.create') }}" class="btn btn-light btn-sm mb-1"><i class="bi bi-house-door"></i> Ruangan</a>
                    <a href="{{ route('kategori.create') }}" class="btn btn-light btn-sm mb-1"><i class="bi bi-tags"></i> Kategori</a>
                    <a href="{{ route('barang.create') }}" class="btn btn-light btn-sm"><i class="bi bi-box"></i> Barang</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
