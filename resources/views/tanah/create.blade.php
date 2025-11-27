@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Tanah</h2>

    <form action="{{ route('tanah.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama Tanah</label>
            <input type="text" name="nama_tanah" class="form-control" required>
        </div>
<div class="mb-3">
    <label>Kode Tanah</label>
    <input type="text" name="kode_tanah" class="form-control" required>
</div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Luas</label>
            <input type="number" name="luas" class="form-control">
        </div>

        <div class="form-group">
            <label>Status</label>
            <input type="text" name="status" class="form-control">
        </div>
        <div class="form-group mb-3">
    <label>No Sertifikat</label>
    <input type="text" name="no_sertifikat" class="form-control" required>
</div>


        <button class="btn btn-primary mt-3">Simpan</button>
        <a href="{{ route('tanah.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>

</div>
@endsection
