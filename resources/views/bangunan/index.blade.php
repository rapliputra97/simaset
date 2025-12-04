@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Bangunan</h2>
    <a href="{{ route('bangunan.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Bangunan
    </a>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <table class="table table-hover table-striped table-bordered align-middle">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Bangunan</th>
                <th>Kode</th>
                <th>Tanah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bangunans as $index => $bangunan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $bangunan->nama_bangunan }}</td>
                <td>{{ $bangunan->kode_bangunan }}</td>
                <td>{{ $bangunan->tanah->nama_tanah }}</td>
                <td>
                    <a href="{{ route('bangunan.show', $bangunan->id) }}" class="btn btn-info btn-sm">
                        <i class="bi bi-eye"></i> Detail
                    </a>
                    <a href="{{ route('bangunan.edit', $bangunan->id) }}" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="{{ route('bangunan.destroy', $bangunan->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
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
