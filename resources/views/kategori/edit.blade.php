@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-card">

        <h2 class="page-title">✏️ Edit Kategori</h2>

        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input 
                    type="text" 
                    name="nama_kategori" 
                    class="form-control" 
                    value="{{ $kategori->nama_kategori }}" 
                    required
                >
            </div>

            <button class="btn btn-primary">Perbarui</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>

        </form>

    </div>
</div>

@endsection
