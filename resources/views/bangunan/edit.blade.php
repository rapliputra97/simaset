@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card p-4 shadow-sm border-success">
        <h3 class="text-success mb-3">Edit Bangunan</h3>

        <form action="{{ route('bangunan.update', $bangunan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Bangunan</label>
                <input type="text" name="nama_bangunan"
                       value="{{ $bangunan->nama_bangunan }}"
                       class="form-control border-success" required>
            </div>

            <div class="mb-3">
                <label>Kode Bangunan</label>
                <input type="text" name="kode_bangunan"
                       value="{{ $bangunan->kode_bangunan }}"
                       class="form-control border-success" required>
            </div>

            <div class="mb-3">
                <label>Pilih Tanah</label>
                <select name="tanah_id" class="form-select border-success" required>
                    @foreach ($tanahs as $t)
                    <option value="{{ $t->id }}"
                        {{ $bangunan->tanah_id == $t->id ? 'selected' : '' }}>
                        {{ $t->nama_tanah }}
                    </option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('bangunan.index') }}" class="btn btn-secondary">Kembali</a>
        </form>

    </div>

</div>
@endsection
