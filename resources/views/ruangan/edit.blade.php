@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <i class="bi bi-house-door"></i> Edit Ruangan
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
            @endif

            <form action="{{ route('ruangan.update', $ruangan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Nama Ruangan</label>
                    <input type="text" name="nama_ruangan" class="form-control" value="{{ old('nama_ruangan', $ruangan->nama_ruangan) }}">
                </div>
                <div class="mb-3">
                    <label>Pilih Bangunan</label>
                    <select name="bangunan_id" class="form-control">
                        <option value="">-- Pilih Bangunan --</option>
                        @foreach($bangunans as $bangunan)
                            <option value="{{ $bangunan->id }}" {{ old('bangunan_id', $ruangan->bangunan_id) == $bangunan->id ? 'selected' : '' }}>
                                {{ $bangunan->nama_bangunan }} ({{ $bangunan->kode_bangunan }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success"><i class="bi bi-save"></i> Update</button>
                <a href="{{ route('ruangan.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
