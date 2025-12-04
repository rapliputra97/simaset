@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Tanah</h2>
    <a href="{{ route('tanah.create') }}" class="btn btn-success mb-3">Tambah Tanah</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Tanah</th>
                <th>Kode Tanah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tanahs as $index => $tanah)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $tanah->nama_tanah }}</td>
                <td>{{ $tanah->kode_tanah }}</td>
                <td>
                    <a href="{{ route('tanah.show', $tanah->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('tanah.edit', $tanah->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('tanah.destroy', $tanah->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin mau hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
