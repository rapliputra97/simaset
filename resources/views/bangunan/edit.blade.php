@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Bangunan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bangunan.update', $bangunan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Bangunan</label>
            <input type="text" name="nama_bangunan" class="form-control" value="{{ old('nama_bangunan', $bangunan->nama_bangunan) }}">
        </div>
        <div class="mb-3">
            <label>Kode Bangunan</label>
            <input type="text" name="kode_bangunan" class="form-control" value="{{ old('kode_bangunan', $bangunan->kode_bangunan) }}">
        </div>
        <div class="mb-3">
            <label>Tanah</label>
            <select name="tanah_id" class="form-control">
                <option value="">-- Pilih Tanah --</option>
                @foreach($tanahs as $tanah)
                    <option value="{{ $tanah->id }}" {{ (old('tanah_id', $bangunan->tanah_id) == $tanah->id) ? 'selected' : '' }}>{{ $tanah->nama_tanah }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('bangunan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
