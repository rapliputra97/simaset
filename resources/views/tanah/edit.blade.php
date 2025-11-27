@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Tanah</h2>

    <form action="{{ route('tanah.update', $tanah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label>Nama Tanah</label>
            <input type="text" name="nama_tanah" value="{{ $tanah->nama_tanah }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Kode Tanah</label>
            <input type="text" name="kode_tanah" value="{{ $tanah->kode_tanah }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>No Sertifikat</label>
            <input type="text" name="no_sertifikat" value="{{ $tanah->no_sertifikat }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ $tanah->alamat }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Luas</label>
            <input type="number" name="luas" value="{{ $tanah->luas }}" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>Status</label>
            <input type="text" name="status" value="{{ $tanah->status }}" class="form-control" required>
        </div>

        <button class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('tanah.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>

</div>
@endsection
