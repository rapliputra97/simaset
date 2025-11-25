@extends('layout')

@section('content')
<div class="container">
    <h2>Tambah Bangunan</h2>

    <form action="{{ route('bangunan.store') }}" method="POST">
        @csrf

        <!-- Nama Bangunan -->
        <div class="mb-3">
            <label>Nama Bangunan</label>
            <input type="text" name="nama_bangunan" class="form-control" required>
        </div>

        <!-- Kode Bangunan -->
        <div class="mb-3">
            <label>Kode Bangunan</label>
            <input type="text" name="kode_bangunan" class="form-control" required>
        </div>

        <!-- DROPDOWN TANAH -->
        <div class="mb-3">
            <label>Pilih Tanah</label>
            <select name="tanah_id" class="form-control" required>
                <option value="">-- Pilih Tanah --</option>

                @foreach ($tanah as $t)
                    <option value="{{ $t->id }}">
                        {{ $t->nama_tanah }}
                    </option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>

    </form>
</div>
@endsection
