@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Kategori</h2>
    <a href="{{ route('kategori.create') }}" class="btn btn-success mb-3"><i class="bi bi-plus-circle"></i> Tambah Kategori</a>
    @if(session('success'))<div class="alert alert-success alert-dismissible fade show">{{ session('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>@endif
    <table class="table table-hover table-bordered align-middle">
        <thead class="table-primary">
            <tr><th>No</th><th>Nama Kategori</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach($kategoris as $index => $kategori)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $kategori->nama_kategori }}</td>
                <td>
                    <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                    <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin mau hapus?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
