@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Tanah</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('tanah.update', $tanah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Tanah</label>
            <input type="text" name="nama_tanah" class="form-control" value="{{ old('nama_tanah', $tanah->nama_tanah) }}">
        </div>
        <div class="mb-3">
            <label>Kode Tanah</label>
            <input type="text" name="kode_tanah" class="form-control" value="{{ old('kode_tanah', $tanah->kode_tanah) }}">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <input type="text" name="status" class="form-control" value="{{ old('status', $tanah->status) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('tanah.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
