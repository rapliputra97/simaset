@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <i class="bi bi-building"></i> Tambah Bangunan
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
            @endif

            <form action="{{ route('bangunan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Nama Bangunan</label>
                    <input type="text" name="nama_bangunan" class="form-control" value="{{ old('nama_bangunan') }}">
                </div>
                <div class="mb-3">
                    <label>Kode Bangunan</label>
                    <input type="text" name="kode_bangunan" class="form-control" value="{{ old('kode_bangunan') }}">
                </div>
                <div class="mb-3">
                    <label>Pilih Tanah</label>
                    <select name="tanah_id" class="form-control">
                        <option value="">-- Pilih Tanah --</option>
                        @foreach($tanahs as $tanah)
                            <option value="{{ $tanah->id }}" {{ old('tanah_id') == $tanah->id ? 'selected' : '' }}>
                                {{ $tanah->nama_tanah }} ({{ $tanah->kode_tanah }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
                <a href="{{ route('bangunan.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
