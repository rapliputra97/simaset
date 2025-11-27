@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card p-4 shadow-sm border-success">
        <h3 class="text-success mb-3">Data Bangunan</h3>

        {{-- Filter Tanah --}}
        <form method="GET" class="row g-3 mb-3">
            <div class="col-md-4">
                <select name="tanah_id" class="form-select border-success">
                    <option value="">-- Filter Berdasarkan Tanah --</option>
                    @foreach ($tanahs as $tanah)
                        <option value="{{ $tanah->id }}"
                            {{ request('tanah_id') == $tanah->id ? 'selected' : '' }}>
                            {{ $tanah->nama_tanah }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <button class="btn btn-success w-100">Filter</button>
            </div>

            <div class="col-md-2">
                <a href="{{ route('bangunan.index') }}" class="btn btn-secondary w-100">Reset</a>
            </div>
        </form>

        <a href="{{ route('bangunan.create') }}" class="btn btn-success mb-3">+ Tambah Bangunan</a>

        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th>Nama Bangunan</th>
                    <th>Kode</th>
                    <th>Tanah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($bangunans as $b)
                <tr>
                    <td>{{ $b->nama_bangunan }}</td>
                    <td>{{ $b->kode_bangunan }}</td>
                    <td>{{ $b->tanah->nama_tanah }}</td>

                    <td>
                        <a href="{{ route('bangunan.edit', $b->id) }}"
                           class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('bangunan.destroy', $b->id) }}"
                              method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus Data Ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>

</div>
@endsection
