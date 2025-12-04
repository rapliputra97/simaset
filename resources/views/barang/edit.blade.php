@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white">
            <i class="bi bi-box"></i> Edit Barang
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
            @endif

            <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang', $barang->nama_barang) }}">
                </div>
                <div class="mb-3">
                    <label>Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control" value="{{ old('kode_barang', $barang->kode_barang) }}">
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="kategori_id" class="form-control">
                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" {{ old('kategori_id', $barang->kategori_id) == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Ruangan</label>
                    <select name="ruangan_id" class="form-control">
                        @foreach($ruangans as $ruangan)
                            <option value="{{ $ruangan->id }}" {{ old('ruangan_id', $barang->ruangan_id) == $ruangan->id ? 'selected' : '' }}>
                                {{ $ruangan->nama_ruangan }} ({{ $ruangan->bangunan->nama_bangunan }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" value="{{ old('jumlah', $barang->jumlah) }}" min="1">
                </div>
                <button class="btn btn-success"><i class="bi bi-save"></i> Update</button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
