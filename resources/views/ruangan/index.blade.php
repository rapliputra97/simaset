@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Ruangan</h2>
    <a href="{{ route('ruangan.create') }}" class="btn btn-success mb-3"><i class="bi bi-plus-circle"></i> Tambah Ruangan</a>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <table class="table table-hover table-striped table-bordered align-middle">
        <thead class="table-warning">
            <tr>
                <th>No</th>
                <th>Nama Ruangan</th>
                <th>Bangunan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ruangans as $index => $ruangan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $ruangan->nama_ruangan }}</td>
                <td>{{ $ruangan->bangunan->nama_bangunan }}</td>
                <td>
                    <a href="{{ route('ruangan.edit', $ruangan->id) }}" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('ruangan.destroy', $ruangan->id) }}" method="POST" style="display:inline-block;">
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
