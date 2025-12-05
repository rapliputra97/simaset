@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-card">

        <h2 class="page-title">➕ Tambah Kategori</h2>

        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input 
                    type="text" 
                    name="nama_kategori" 
                    class="form-control" 
                    required
                >
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>

        </form>

    </div>
</div>

@endsection
