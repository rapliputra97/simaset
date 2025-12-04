@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Barang</h2>
    <a href="{{ route('barang.create') }}" class="btn btn-success mb-3"><i class="bi bi-plus-circle"></i> Tambah Barang</a>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <table class="table table-hover table-striped table-bordered align-middle">
        <thead class="table-danger">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Kategori</th>
                <th>Ruangan</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $index => $barang)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->kode_barang }}</td>
                <td>{{ $barang->kategori->nama_kategori }}</td>
                <td>{{ $barang->ruangan->nama_ruangan }}</td>
                <td>{{ $barang->jumlah }}</td>
                <td>
                    <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin mau hapus?')" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
